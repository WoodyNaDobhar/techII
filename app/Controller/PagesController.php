<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
App::import('Vendor', 'recaptcha/recaptchalib');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	
	public $components = array('Email');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		//index
		if($path[0] == 'home'){
			
			//splashes
			$this->loadModel('Splashes');
			$homeSplashes = $this->Splashes->find('all');
			$this->set('homeSplashes', $homeSplashes);
		
			//features
			$this->loadModel('FeaturePages');
			$homeFeatures = $this->FeaturePages->find('all', array(
				'limit'	=> '3',
				'order'	=> 'id DESC'
			));
			$homeFeatures = array_reverse($homeFeatures);
			$this->set('homeFeatures', $homeFeatures);
		
			//testimonials
			$this->loadModel('Testimonials');
			$homeTestimonials = $this->Testimonials->find('all', array(
				'limit'	=> '3',
				'order'	=> 'id DESC'
			));
			$this->set('homeTestimonials', $homeTestimonials);
		}else{
		
			//page-specific stuff
			$thisModel = ucfirst($path[0].'Pages');
			if($this->loadModel($thisModel)){
			
				//sections
				$pageSections = $this->$thisModel->find('all');
				$this->set('pageSections', $pageSections);
				
				//content
				$pageContent = $this->$thisModel->find('first', array(
					'conditions'	=> array(
						'id'	=> $this->request->params['item']
					)
				));
				$tempName = explode(' ', $pageContent[$thisModel]['name']);
				$pageContent[$thisModel]['name1'] = array_shift($tempName);
				$pageContent[$thisModel]['name2'] = implode(' ', $tempName);
				$this->set('pageContent', $pageContent);
			}
			
			//additional stuff, as required
			
			//lids
			if($path[0] == 'products' && $this->request->params['item'] == 1){
					
				$this->loadModel('Lid');
				$products = $this->Lid->find('all', array(
					'contain'	=> array(
						'Ctype',
						'Resin'
					),
					'order'		=> 'Lid.name'
				));
				$products = $this->setProductFamilies($products, 'Lid');
				
				$productFamilies = $this->getProductFamilies($products, 'Lid');
				$this->set('productFamilies', $productFamilies);
				$products['type'] = 'Lid';
				$this->set('products', $products);
			
			//containers
			}elseif($path[0] == 'products' && $this->request->params['item'] == 2){
					
				$this->loadModel('Container');
				$products = $this->Container->find('all', array(
					'order'		=> 'Container.name',
					'contain'	=> array(
						'Ctype',
						'Resin'
					)
				));
				$products = $this->setProductFamilies($products, 'Container');
				$productFamilies = $this->getProductFamilies($products, 'Container');
				$this->set('productFamilies', $productFamilies);
				$products['type'] = 'Container';
				$this->set('products', $products);
				
			//blog
			}elseif($path[0] == 'feature' && $this->request->params['item'] == 3){
				
				//if there's no article selected, all the articles
				if(!isset($path[1])){
					
					$this->loadModel('News');
					$newsContents = $this->News->find('all', array(
						'order'	=> 'id DESC'
					));
					$this->set('newsContents', $newsContents);
				}else{
					
					$this->loadModel('News');
					$newsContent = $this->News->find('first', array(
						'conditions'	=> array(
							'id'	=>	$path[1],
						),
					));
					$this->set('newsContent', $newsContent);
					
					//unset the path item, so the right page is created
					unset($path[1]);
				}
				
			//contact us
			}elseif($path[0] == 'about' && $this->request->params['item'] == 2){
				
				//let the page know to show the form
				$this->set('isContact', TRUE);

				//contact submitted
				if(!empty($this->data)){
					
					//captcha setup
					$resp = recaptcha_check_answer(
						RECAPTCHA_PRIVATE_KEY,
						$_SERVER['REMOTE_ADDR'],
						$_POST['recaptcha_challenge_field'],
						$_POST['recaptcha_response_field']
					);
		
					//required fields check
					if(empty($this->data['email']) || empty($this->data['name'])){
						$this->Session->setFlash('All fields are required.');
						$this->set('email', isset($this->data['email'])?$this->data['email']:'');
						$this->set('name', isset($this->data['name'])?$this->data['name']:'');
						$this->set('message', isset($this->data['message'])?$this->data['message']:'');
					}else if(!$this->isValidEmailFormat($this->data['email'])){
						//validate the email format
						$this->Session->setFlash('Please Enter a valid Email Address.');
						$this->set('email', isset($this->data['email'])?$this->data['email']:'');
						$this->set('name', isset($this->data['name'])?$this->data['name']:'');
						$this->set('message', isset($this->data['message'])?$this->data['message']:'');
					}else if(!$resp->is_valid){
						//if it's no good, tell them.
						$this->Session->setFlash('You did not enter the reCaptcha words correctly.  Please try again.');
						$this->set('email', isset($this->data['email'])?$this->data['email']:'');
						$this->set('name', isset($this->data['name'])?$this->data['name']:'');
						$this->set('message', isset($this->data['message'])?$this->data['message']:'');
					}else{
						
						//didn't find someone else to do this for us?  Oh well, get to it, Dave.
						$this->loadModel('Settings');
						$contactSettings = $this->Settings->find('first');
						$to = $contactSettings['Settings']['email'];
		
						//send the info
						$subject = "Message via your website from ".$this->data['name'];
						$this->Email->to = $to;
						$this->Email->from = $this->data['name'].' <'.$this->data['email'].'>';
						$this->Email->subject = $subject;
						$this->Email->template = 'message';
						$this->Email->sendAs = 'both';
		 				$this->Email->delivery = 'debug';
						$this->set('email', $this->data['email']);
						$this->set('name', $this->data['name']);
						$this->set('message', $this->data['message']);
						if($this->Email->send()){
							$this->Session->setFlash('Thanks for the input!  We\'ll get back to you with any questions you had as soon as we can.');
						}else{
							$this->Session->setFlash('Your request has failed to send for some reason.  Please check your email address and try again.');
							$this->set('email', $this->data['email']);
							$this->set('name', $this->data['name']);
							$this->set('message', $this->data['message']);
						}
					}
				}
			}
		};

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
	
	function getProductFamilies($products, $type){
		
		$families = array();
		foreach($products as $key => $product){
			
			$family = substr($product[$type]['name'], 0, 1);
			
			if(!$this->searchForId($family, $families)){
				$families[]['id'] = $family;
			}
		}
		
		return $families;
	}
	
	function setProductFamilies($products, $type){
		
		$families = array();
		foreach($products as $key => $product){
			
			$family = substr($product[$type]['name'], 0, 1);
			$products[$key][$type]['family'] = $family;
		}
		return $products;
	}

	function searchForId($id, $array) {
		foreach ($array as $key => $val) {
			if ($val['id'] === $id) {
				return $key;
			}
		}
		return null;
	}
	
	function isValidEMailFormat($email){
		if( preg_match("/^[[:alnum:]][a-zA-Z0-9._-]*@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/i", $email) ){
			return true;
		} else {
			return false;
		}
	}
}
