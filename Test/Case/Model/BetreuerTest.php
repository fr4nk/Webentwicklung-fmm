<?php
App::uses('Betreuer', 'Model');

/**
 * Betreuer Test Case
 *
 */
class BetreuerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.betreuer', 'app.rolle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Betreuer = ClassRegistry::init('Betreuer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Betreuer);

		parent::tearDown();
	}

}
