<?php
App::uses('Ltype', 'Model');

/**
 * Ltype Test Case
 *
 */
class LtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ltype',
		'app.lid',
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
		$this->Ltype = ClassRegistry::init('Ltype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ltype);

		parent::tearDown();
	}

}
