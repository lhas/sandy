<?php
App::uses('AppModel', 'Model');
/**
 * Aerobic Model
 *
 * @property User $User
 * @property AerobicStep $AerobicStep
 */
class Aerobic extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Este campo é obrigatório',
			),
		),
		'inicio' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo é obrigatório',
			),
		),
		'aquecimento' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo é obrigatório',
			),
		),
		'fcmax' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo é obrigatório',
			),
		),
		'pse' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo é obrigatório',
			),
		),
		'objetivo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo é obrigatório',
			),
		)
	);

	public $belongsTo = array(
		'User'
	);

	public $hasMany = array(
		'AerobicStep'
	);

}