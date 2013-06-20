<?php
App::uses('AppController', 'Controller');
/**
 * Musculations Controller
 *
 * @property Musculation $Musculation
 */
class MusculationsController extends AppController {

	public function ajax_delete_exercise() {
		$this->layout = "ajax";
		$this->autoRender = false;

		$id = $_POST['id'];

		$this->Musculation->MusculationExercise->delete($id);
	}

	# Método usado na requisição AJAX de inserir novos exercícios na série de musculação
	public function ajax_musculationexercise_fields() {
		$this->layout = "ajax";

		$i = $_POST['i'];

		$this->set(compact('i'));
	}

	public function index() {
		$this->Musculation->recursive = 2;
		$this->set('musculations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Musculation->recursive = 2;
		
		if (!$this->Musculation->exists($id)) {
			throw new NotFoundException(__('Série de musculação inválida'));
		}
		$options = array('conditions' => array('Musculation.' . $this->Musculation->primaryKey => $id));
		$this->set('musculation', $this->Musculation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Musculation->create();
			if ($this->Musculation->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A série de musculação foi cadastrada com sucesso.'), 'success');
				$this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar a série.'), 'error');
			}
		}
		$users = $this->Musculation->User->find('list', array('fields' => array('User.id', 'User.username') ) );
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Musculation->exists($id)) {
			throw new NotFoundException(__('Série de musculação inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Musculation->saveAll($this->request->data)) {
				$this->Session->setFlash(__('A série de musculação foi editada com sucesso.'), 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível editar a série.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Musculation.' . $this->Musculation->primaryKey => $id));
			$this->request->data = $this->Musculation->find('first', $options);
		}
		$users = $this->Musculation->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Musculation->id = $id;
		if (!$this->Musculation->exists()) {
			throw new NotFoundException(__('Série de musculação inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Musculation->delete()) {
				$this->Session->setFlash(__('A série de musculação foi excluída com sucesso.'), 'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Não foi possível excluir a série.'), 'error');
		$this->redirect(array('action' => 'index'));
	}
}
