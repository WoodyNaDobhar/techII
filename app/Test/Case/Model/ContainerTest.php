<?php
App::uses('Container', 'Model');

/**
 * Container Test Case
 *
 */
class ContainerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.container',
		'app.ctype',
		'app.lid',
		'app.ltype',
		'app.resin',
		'app.containers_lid'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Container = ClassRegistry::init('Container');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Container);

		parent::tearDown();
	}

}
