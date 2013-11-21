<?php
App::uses('Autoridade', 'Model');

/**
 * Autoridade Test Case
 *
 */
class AutoridadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.autoridade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Autoridade = ClassRegistry::init('Autoridade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Autoridade);

		parent::tearDown();
	}

}
