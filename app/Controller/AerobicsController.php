<?php
class AerobicsController extends AppController {

	public function table($id = null) {

		$serie = $this->Aerobic->find('first', array(
			'contain' => array(
				'User' => array(
					'UserMeta'
				),
				'AerobicStep'
			),
			'conditions' => array(
				'Aerobic.id' => $id
			)
		) );

		$this->set(compact('serie'));
	}

	public function index() {
		$this->Aerobic->recursive = 2;
		$this->set('aerobics', $this->paginate());
	}

	public function view($id = null) {
		$this->Aerobic->recursive = 2;
		
		if (!$this->Aerobic->exists($id)) {
			throw new NotFoundException(__('Série de aeróbica inválida'));
		}
		$options = array('conditions' => array('Aerobic.' . $this->Aerobic->primaryKey => $id));
		$this->set('aerobic', $this->Aerobic->find('first', $options));
	}

	public function add() {
		# Requisição POST
		if ($this->request->is('post')) {
			# Limpa o model
			$this->Aerobic->create();

			# Tenta salvar a série, se salvar, exibe 1 mensagem pro usuário e o redireciona
			if ($this->Aerobic->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A série aeróbica foi salva com sucesso.'), 'success');
				$this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar a série aeróbica.'), 'error');
			}
		}

		# Alimenta a lista de usuários a ser cadastrado
		$users = $this->Aerobic->User->find('list', array('fields' => array('User.id', 'User.username') ) );

		# Envia para a view
		$this->set(compact('users'));
	}

	public function edit($id = null) {
		if (!$this->Aerobic->exists($id)) {
			throw new NotFoundException(__('Série de aeróbica inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aerobic->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A série de aeróbica foi editada com sucesso.'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível editar a série de aeróbica.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Aerobic.' . $this->Aerobic->primaryKey => $id));
			$this->request->data = $this->Aerobic->find('first', $options);
		}
		$users = $this->Aerobic->User->find('list');
		$this->set(compact('users'));
	}

	public function delete($id = null) {
		$this->Aerobic->id = $id;
		if (!$this->Aerobic->exists()) {
			throw new NotFoundException(__('Série de aeróbica inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aerobic->delete()) {
				$this->Session->setFlash(__('A série de aeróbica foi excluída com sucesso.'), 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível excluir a série de aeróbica.'), 'error');
		$this->redirect(array('action' => 'index'));
	}

	# Método usado na requisição AJAX de inserir novas fases na série aeróbica
	public function ajax_aerobicstep_fields() {
		$this->layout = "ajax";

		$i = $_POST['i'];

		$this->set(compact('i'));
	}

	public function ajax_delete_step() {
		$this->layout = "ajax";
		$this->autoRender = false;

		$id = $_POST['id'];

		$this->Aerobic->AerobicStep->delete($id);
	}

	public function isAuthorized($user) {
	    // All registered users can add posts
	    if (in_array($this->action, array('table'))) {
	        return true;
	    }

	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete', 'index'))) {
	        if (isset($user['role']) && $user['role'] === 'admin') {
				return true;
			}
	    }

	    return parent::isAuthorized($user);
	}
}
