<?php
/**
 * ContainerFixture
 *
 */
class ContainerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'line_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'ctype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'diameter' => array('type' => 'float', 'null' => true, 'default' => null),
		'height' => array('type' => 'float', 'null' => true, 'default' => null),
		'volume' => array('type' => 'float', 'null' => true, 'default' => null),
		'resin_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'process_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'decoration_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'o2barrier' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'case_count' => array('type' => 'integer', 'null' => true, 'default' => null),
		'case_weight' => array('type' => 'float', 'null' => true, 'default' => null),
		'case_pallet' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'container_ctype_id' => array('column' => 'ctype_id', 'unique' => 0),
			'container_resin_id' => array('column' => 'resin_id', 'unique' => 0),
			'container_line_id' => array('column' => 'line_id', 'unique' => 0),
			'container_process_id' => array('column' => 'process_id', 'unique' => 0),
			'container_decoration_id' => array('column' => 'decoration_id', 'unique' => 0)
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
			'line_id' => 1,
			'ctype_id' => 1,
			'diameter' => 1,
			'height' => 1,
			'volume' => 1,
			'resin_id' => 1,
			'process_id' => 1,
			'decoration_id' => 1,
			'o2barrier' => 1,
			'case_count' => 1,
			'case_weight' => 1,
			'case_pallet' => 1
		),
	);

}
