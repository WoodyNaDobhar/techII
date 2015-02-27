<?php
App::uses('Process', 'Model');

/**
 * Process Test Case
 *
 */
class ProcessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.process',
		'app.container',
		'app.line',
		'app.ctype',
		'app.lid',
		'app.ltype',
		'app.resin',
		'app.containers_lid',
		'app.decoration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Process = ClassRegistry::init('Process');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Process);

		parent::tearDown();
	}

}
