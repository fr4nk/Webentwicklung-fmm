<?php
App::uses('AppModel', 'Model');
/**
 * Betreuer Model
 *
 * @property Rolle $Rolle
 */
class Betreuer extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vorname';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rolle' => array(
			'className' => 'Rolle',
			'foreignKey' => 'rolle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
