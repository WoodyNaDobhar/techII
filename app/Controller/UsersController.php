<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */

class UsersController extends AppController {

	public $paginate = array(
		'limit' => 25,
		'conditions' => array('status' => '1'),
		'order' => array('User.username' => 'asc' )
	);
	 
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login');
	}

	public function login() {
		 
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('controller' => 'users', 'action' => 'index', 'admin' => true));
		}
		 
		// if we get the post information, try to authenticate
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')), 'default', array('class' => 'alert alert-success'));
				if($this->Auth->user('is_admin')){
					$this->redirect($this->Auth->redirectUrl());
				}else{
					return $this->redirect('/');
				}
			}else{
				$this->Session->setFlash(__('Invalid username or password'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function admin_logout() {
		$this->redirect($this->Auth->logout());
	}

	public function admin_index() {
		$this->paginate = array(
				'limit' => 25,
				'order' => array('User.username' => 'asc' )
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			 
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$errorString = '<br>';
				foreach($this->User->validationErrors as $key => $errors){
					$errorString .= $key.': ';
					foreach($errors as $error){
						$errorString .= $error.'. ';
					}
					$errorString .= '<br>';
				}
				$this->Session->setFlash('The user could not be created: '.$errorString.' Please, try again.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {

		if (!$id) {
			$this->Session->setFlash('Please provide a user id', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}

		$user = $this->User->findById($id);
		if (!$user) {
			$this->Session->setFlash('Invalid User ID Provided', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->User->id = $id;
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been updated'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'edit', $id));
			}else{
				$this->Session->setFlash(__('Unable to update your user.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

		if (!$this->request->data) {
			$this->request->data = $user;
		}
	}

	public function admin_delete($id = null) {
		 
		if (!$id) {
			$this->Session->setFlash('Please provide a user id', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}
		 
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash('Invalid user id provided', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted'), 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
	 
	public function admin_activate($id = null) {
		 
		if (!$id) {
			$this->Session->setFlash('Please provide a user id', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}
		 
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash('Invalid user id provided', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->saveField('status', 1)) {
			$this->Session->setFlash(__('User re-activated'), 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not re-activated'), 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
