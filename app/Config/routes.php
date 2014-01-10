<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	//legal
	Router::connect('/terms', array('controller' => 'pages', 'action' => 'display', 'legal', 'item' => 1));
	Router::connect('/privacy', array('controller' => 'pages', 'action' => 'display', 'legal', 'item' => 2));
	
	//about
	Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about', 'item' => 1));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'about', 'item' => 2));
	
	//decoration
	Router::connect('/offset', array('controller' => 'pages', 'action' => 'display', 'decoration', 'item' => 1));
	Router::connect('/inmold', array('controller' => 'pages', 'action' => 'display', 'decoration', 'item' => 2));
	Router::connect('/wetdry', array('controller' => 'pages', 'action' => 'display', 'decoration', 'item' => 3));
	Router::connect('/labeling', array('controller' => 'pages', 'action' => 'display', 'decoration', 'item' => 4));
	
	//processes
	Router::connect('/injection', array('controller' => 'pages', 'action' => 'display', 'processes', 'item' => 1));
	Router::connect('/thermo', array('controller' => 'pages', 'action' => 'display', 'processes', 'item' => 2));
	Router::connect('/qc', array('controller' => 'pages', 'action' => 'display', 'processes', 'item' => 3));
	Router::connect('/development', array('controller' => 'pages', 'action' => 'display', 'processes', 'item' => 4));
	
	//products
	Router::connect('/lids', array('controller' => 'pages', 'action' => 'display', 'products', 'item' => 1));
	Router::connect('/containers', array('controller' => 'pages', 'action' => 'display', 'products', 'item' => 2));
	Router::connect('/custom', array('controller' => 'pages', 'action' => 'display', 'products', 'item' => 3));
	Router::connect('/specialty', array('controller' => 'pages', 'action' => 'display', 'products', 'item' => 4));
	
	//features
	Router::connect('/new', array('controller' => 'pages', 'action' => 'display', 'feature', 'item' => 1));
	Router::connect('/shows', array('controller' => 'pages', 'action' => 'display', 'feature', 'item' => 2));
	Router::connect('/news', array('controller' => 'pages', 'action' => 'display', 'feature', 'item' => 3));
	Router::connect('/news/*', array('controller' => 'pages', 'action' => 'display', 'feature', 'item' => 3));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
