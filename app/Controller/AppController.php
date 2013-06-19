<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
			'authorize' => array('Controller')
		),
	);

	public $helpers = array(
		'Js' => array('Jquery'),
		'Hasmany',
	);

	public function beforeFilter() {
		$this->Auth->allow('index', 'view');
	}

	public function isAuthorized($user) {
		// Admin can access every action
		if (isset($user['role']) && $user['role'] === 'admin') {
		return true;
		}

		// Default deny
		return false;
	}

	public function redirect_user_logged() {
		if(AuthComponent::user()) {
			return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
		}
	}

}