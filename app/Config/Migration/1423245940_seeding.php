<?php
class Seeding extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'Seeding';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		
		//insert all the countries and codes
		$db = ConnectionManager::getDataSource('default');
		if($direction == 'up'){
			if($db->rawQuery("
				INSERT INTO `ctypes` (`id`, `name`) VALUES
					(1, 'Composite Easy-Open'),
					(2, 'Composite Tube'),
					(3, 'Metal'),
					(4, 'Plastic'),
					(5, 'Paper, Rolled Rim');
				INSERT INTO `decorations` (`id`, `name`) VALUES
					(1, 'None\r\n'),
					(2, 'In-Mold Labeling'),
					(3, 'Stealth Printing');
				INSERT INTO `lines` (`id`, `name`) VALUES
					(1, 'Classic'),
					(2, 'Square'),
					(3, 'Helix'),
					(4, 'Fision'),
					(5, 'Ovation'),
					(6, 'Corona'),
					(7, 'Rectangle');
				INSERT INTO `ltypes` (`id`, `name`) VALUES
					(1, ' '),
					(2, 'Bouillon'),
					(3, 'CE'),
					(4, 'CEL'),
					(5, 'CE LG'),
					(6, 'CF'),
					(7, 'CFA'),
					(8, 'CV'),
					(9, 'D'),
					(10, 'DRP'),
					(11, 'DV II'),
					(12, 'DVD'),
					(13, 'DV2'),
					(14, 'DV4'),
					(15, 'FK'),
					(16, 'FL'),
					(17, 'GDV'),
					(18, 'LG'),
					(19, 'LR'),
					(20, 'LS'),
					(21, 'LS-NV'),
					(22, 'LT'),
					(23, 'M'),
					(24, 'MAZ'),
					(25, 'MD'),
					(26, 'MDCX'),
					(27, 'MDX'),
					(28, 'MDXB'),
					(29, 'MI'),
					(30, 'MLG'),
					(31, 'MLXO'),
					(32, 'MF'),
					(33, 'MLXC'),
					(34, 'MS'),
					(35, 'MV'),
					(36, 'MX'),
					(37, 'NDV'),
					(38, 'P'),
					(39, 'PE'),
					(40, 'PF'),
					(41, 'PT'),
					(42, 'R'),
					(43, 'S'),
					(44, 'SP'),
					(45, 'TF'),
					(46, 'TS');
				INSERT INTO `processes` (`id`, `name`) VALUES
					(1, 'Thermoform\r\n'),
					(2, 'Injection');
				INSERT INTO `resins` (`id`, `name`) VALUES
					(1, 'LLDPE\r\n'),
					(2, 'PP');"
					)){  			
				return true;
			}else{
				return false;
			}
		}
		return true;
	}
}
