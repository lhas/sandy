<?php
App::uses('Aerobic', 'Model');

/**
 * Aerobic Test Case
 *
 */
class AerobicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aerobic',
		'app.user',
		'app.musculation',
		'app.user_meta',
		'app.aerobic_step'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aerobic = ClassRegistry::init('Aerobic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aerobic);

		parent::tearDown();
	}

}
