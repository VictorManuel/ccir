<?php
App::uses('Noticiasalbum', 'Model');

/**
 * Noticiasalbum Test Case
 *
 */
class NoticiasalbumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticiasalbum',
		'app.noticia',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Noticiasalbum = ClassRegistry::init('Noticiasalbum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Noticiasalbum);

		parent::tearDown();
	}

}
