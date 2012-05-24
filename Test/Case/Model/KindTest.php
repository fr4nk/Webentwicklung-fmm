<?php
App::uses('Kind', 'Model');

/**
 * Kind Test Case
 *
 */
class KindTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.kind');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kind = ClassRegistry::init('Kind');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kind);

		parent::tearDown();
	}

}
