<?php
App::uses('Musculation', 'Model');

/**
 * Musculation Test Case
 *
 */
class MusculationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.musculation',
		'app.user',
		'app.aerobic',
		'app.aerobic_step',
		'app.user_meta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Musculation = ClassRegistry::init('Musculation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Musculation);

		parent::tearDown();
	}

}
