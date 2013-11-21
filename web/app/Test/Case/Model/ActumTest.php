<?php
App::uses('Actum', 'Model');

/**
 * Actum Test Case
 *
 */
class ActumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actum = ClassRegistry::init('Actum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actum);

		parent::tearDown();
	}

}
