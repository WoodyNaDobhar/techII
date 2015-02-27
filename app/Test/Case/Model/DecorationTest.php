<?php
App::uses('Decoration', 'Model');

/**
 * Decoration Test Case
 *
 */
class DecorationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.decoration',
		'app.container',
		'app.line',
		'app.ctype',
		'app.lid',
		'app.ltype',
		'app.resin',
		'app.containers_lid',
		'app.process'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Decoration = ClassRegistry::init('Decoration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Decoration);

		parent::tearDown();
	}

}
