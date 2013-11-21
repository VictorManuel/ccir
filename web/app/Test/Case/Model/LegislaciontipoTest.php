<?php
App::uses('Legislaciontipo', 'Model');

/**
 * Legislaciontipo Test Case
 *
 */
class LegislaciontipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.legislaciontipo',
		'app.alcance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Legislaciontipo = ClassRegistry::init('Legislaciontipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Legislaciontipo);

		parent::tearDown();
	}

}
