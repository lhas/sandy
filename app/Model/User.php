<?php
class User extends AppModel {

	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
		'username' => array('type' => 'like', 'field' => array('User.username', 'UserMeta.value') ),
		'role' => array('type' => 'value')
	);

	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Este usuário já existe',
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório',
			),
		),
		'role' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo obrigatório',
			),
		),
	);

	public $hasOne = array('UserMeta');

	public $hasMany = array(
		'UserMeta',
		'Aerobic',
		'Musculation',
	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

}
