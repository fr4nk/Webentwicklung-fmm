<?php
App::uses('AppModel', 'Model');
/**
 * Wunsch Model
 *
 * @property Teili $Teili
 */
class Wunsch extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Teili' => array(
			'className' => 'Teili',
			'foreignKey' => 'teili_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
