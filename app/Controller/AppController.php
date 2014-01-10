<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	 Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link			http://cakephp.org CakePHP(tm) Project
 * @package		 app.Controller
 * @since		 CakePHP(tm) v 0.2.9
 * @license		 http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect'	=> array(
				'admin'			=> true,
				'controller'	=> 'settings',
				'action'		=> 'index'
			),
			'logoutRedirect'	=> array(
				'controller'	=> 'pages',
				'action'		=> 'display',
				'home'
			)
		)
	);

	public function beforeFilter() {
		
		$this->Auth->allow('index', 'view', 'display');
		
		//site contents
		$this->loadModel('Contents');
		$menuContents = $this->Contents->find('all', array(
			'order'		=> array(
				'Contents.order'
			)
		));
		
		foreach($menuContents as $key => $content){
			
			$model = $content['Contents']['name'].'Pages';
			$this->loadModel($model);
			$subContents = $this->$model->find('all', array(
				'fields'	=> array(
					'id',
					'name',
					'link',
					'byline',
					'description',
					'nav_image'
				)
			));
			$menuContents[$key]['Contents'][$model] = $subContents;
		}
		$this->set('menuContents', $menuContents);
		
		//site settings
		$this->loadModel('Settings');
		$headerSettings = $this->Settings->find('first');
		$this->set('headerSettings', $headerSettings);
		
		//site socials
		$this->loadModel('Socials');
		$headerSocials = $this->Socials->find('all');
		$this->set('headerSocials', $headerSocials);
	}
}
