<?php
App::uses('Circulare', 'Model');

/**
 * Circulare Test Case
 *
 */
class CirculareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.circulare',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Circulare = ClassRegistry::init('Circulare');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Circulare);

		parent::tearDown();
	}

}
