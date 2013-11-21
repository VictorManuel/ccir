<?php
App::uses('AppModel', 'Model');
/**
 * Legislaciontipo Model
 *
 * @property Alcance $Alcance
 */
class Legislaciontipo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'alcance_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Alcance' => array(
			'className' => 'Alcance',
			'foreignKey' => 'alcance_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
