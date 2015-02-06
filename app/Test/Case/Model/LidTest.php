<?php
App::uses('Lid', 'Model');

/**
 * Lid Test Case
 *
 */
class LidTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lid',
		'app.ltype',
		'app.ctype',
		'app.container',
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
		$this->Lid = ClassRegistry::init('Lid');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lid);

		parent::tearDown();
	}

}
