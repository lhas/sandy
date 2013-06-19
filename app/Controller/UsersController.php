<?php
class UsersController extends AppController {

	# Callback
	public function beforeFilter() {
		# Extende o beforeFilter da classe herdada
		parent::beforeFilter();

		# Autoriza a página de cadastro como pública
		$this->Auth->allow('add');
	}

	# Página de gerenciamento central da aplicação
	public function dashboard() {

	}

	# Página de login
	public function login() {
		# Redireciona o usuário, caso já esteja logado.
		$this->redirect_user_logged();

		# Requisição POST
		if ($this->request->is('post')) {
			# Se o usuário puder se logado, ele é redirecionado
			if ($this->Auth->login()) {
				$this->Session->setFlash('Seja bem-vindo a área restrita de alunos do Daniel Sandy.', 'info');
				$this->redirect($this->Auth->redirect());
			# Se o usuário não conseguir logar, é exibido 1 mensagem
			} else {
				$this->Session->setFlash('E-mail e/ou senha inválidos.', 'error');
			}
		}
	}

	# Página de logout
	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	# Gerenciamento de usuários cadastrados
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	# Visualização do perfil do usuário
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	# Página para adicionar novo usuário
	public function add() {
		# Requisição POST
		if ($this->request->is('post')) {
			# Libera o model de possíveis dados
			$this->User->create();

			# Se os dados inseridos passarem na validação, o usuário é avisado e redirecionado
			if ($this->User->saveAll($this->request->data)) {
				$this->Session->setFlash('O usuário foi cadastrado com sucesso.', 'success');
				$this->redirect(array('action' => 'dashboard'));
			# Se a validação não passar, o usuário também é avisado
			} else {
				$this->Session->setFlash('Não foi possível cadastrar o usuário.', 'error');
			}
		}
	}

	# Página para editar usuário cadastrado
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuário inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->saveAll($this->request->data)) {
				$this->Session->setFlash(__('O usuário foi editado com sucesso.'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível editar o usuário.'), 'error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	# Página para deletar usuário cadastrado
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
