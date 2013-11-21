<?php
App::uses('Actividadesalbum', 'Model');

/**
 * Actividadesalbum Test Case
 *
 */
class ActividadesalbumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividadesalbum',
		'app.padrone',
		'app.actividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actividadesalbum = ClassRegistry::init('Actividadesalbum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actividadesalbum);

		parent::tearDown();
	}

}
