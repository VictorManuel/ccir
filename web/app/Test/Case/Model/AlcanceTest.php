<?php
App::uses('Alcance', 'Model');

/**
 * Alcance Test Case
 *
 */
class AlcanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alcance',
		'app.legislaciontipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alcance = ClassRegistry::init('Alcance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alcance);

		parent::tearDown();
	}

}
