<?php
App::uses('Ctype', 'Model');

/**
 * Ctype Test Case
 *
 */
class CtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ctype',
		'app.container',
		'app.resin',
		'app.lid',
		'app.ltype',
		'app.containers_lid'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ctype = ClassRegistry::init('Ctype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ctype);

		parent::tearDown();
	}

}
