<?php
App::uses('Auto', 'Model');

/**
 * Auto Test Case
 *
 */
class AutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auto = ClassRegistry::init('Auto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auto);

		parent::tearDown();
	}

}
