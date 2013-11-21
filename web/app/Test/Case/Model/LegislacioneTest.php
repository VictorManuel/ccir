<?php
App::uses('Legislacione', 'Model');

/**
 * Legislacione Test Case
 *
 */
class LegislacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.legislacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Legislacione = ClassRegistry::init('Legislacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Legislacione);

		parent::tearDown();
	}

}
