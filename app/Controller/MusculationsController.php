<?php
App::uses('AppController', 'Controller');
/**
 * Musculations Controller
 *
 * @property Musculation $Musculation
 */
class MusculationsController extends AppController {

	# Método usado na requisição AJAX de inserir novos exercícios na série de musculação
	public function ajax_musculationexercise_fields() {
		$this->layout = "ajax";

		$i = $_POST['i'];

		$this->set(compact('i'));
	}

	public function index() {
		$this->Musculation->recursive = 0;
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
		if (!$this->Musculation->exists($id)) {
			throw new NotFoundException(__('Invalid musculation'));
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
			throw new NotFoundException(__('Invalid musculation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Musculation->save($this->request->data)) {
				$this->Session->setFlash(__('The musculation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The musculation could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid musculation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Musculation->delete()) {
			$this->Session->setFlash(__('Musculation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Musculation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
