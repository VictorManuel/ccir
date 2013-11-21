<?php
App::uses('Padrone', 'Model');

/**
 * Padrone Test Case
 *
 */
class PadroneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.padrone',
		'app.actividadesalbum',
		'app.actividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Padrone = ClassRegistry::init('Padrone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Padrone);

		parent::tearDown();
	}

}
