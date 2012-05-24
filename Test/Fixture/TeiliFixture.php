<?php
/**
 * TeiliFixture
 *
 */
class TeiliFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'nachname' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vorname' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'geboren' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'ist_kjgmitglied' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'kann_schwimmen' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'zeltwunsch' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'anmeldung' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'nachname' => array('column' => 'nachname', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'nachname' => 'Lorem ipsum dolor ',
			'vorname' => 'Lorem ipsum dolor ',
			'geboren' => '2012-05-22',
			'ist_kjgmitglied' => 1,
			'kann_schwimmen' => 1,
			'zeltwunsch' => 'Lorem ipsum dolor sit amet',
			'id' => 1,
			'anmeldung' => 1337695182
		),
	);
}
