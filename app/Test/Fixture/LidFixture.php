<?php
/**
 * LidFixture
 *
 */
class LidFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ltype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'diameter' => array('type' => 'float', 'null' => true, 'default' => null),
		'height' => array('type' => 'float', 'null' => true, 'default' => null),
		'ctype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'resin_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'print' => array('type' => 'float', 'null' => false, 'default' => null),
		'case_count' => array('type' => 'integer', 'null' => true, 'default' => null),
		'case_weight' => array('type' => 'float', 'null' => true, 'default' => null),
		'case_pallet' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'lid_resin_id' => array('column' => 'resin_id', 'unique' => 0),
			'lid_ltype_id' => array('column' => 'ltype_id', 'unique' => 0),
			'lid_ctype_id' => array('column' => 'ctype_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'ltype_id' => 1,
			'diameter' => 1,
			'height' => 1,
			'ctype_id' => 1,
			'resin_id' => 1,
			'print' => 1,
			'case_count' => 1,
			'case_weight' => 1,
			'case_pallet' => 1
		),
	);

}
