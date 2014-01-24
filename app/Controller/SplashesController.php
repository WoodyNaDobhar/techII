<?php
App::uses('AppController', 'Controller');
/**
 * Splashes Controller
 *
 * @property Splash $Splash
 * @property PaginatorComponent $Paginator
 */
class SplashesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUploader');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Splash->recursive = 0;
		$this->set('splashes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Splash->exists($id)) {
			throw new NotFoundException(__('Invalid splash'));
		}
		$options = array('conditions' => array('Splash.' . $this->Splash->primaryKey => $id));
		$this->set('splash', $this->Splash->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['Splash']['image']['name']){

				//update the file name
				$this->request->data['Splash']['image']['name'] = rand(100000, 999999).$this->request->data['Splash']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Splash']['image'], FILE_SPLASH);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Splash']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The splash could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Splash']['image']);
			}
			$this->Splash->create();
			if ($this->Splash->save($this->request->data)) {
				$this->Session->setFlash(__('The splash has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The splash could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Splash->exists($id)) {
			throw new NotFoundException(__('Invalid splash'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['Splash']['image']['name']){

				//update the file name
				$this->request->data['Splash']['image']['name'] = rand(100000, 999999).$this->request->data['Splash']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Splash']['image'], FILE_SPLASH);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Splash']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The splash could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Splash']['image']);
			}
			if ($this->Splash->save($this->request->data)) {
				$this->Session->setFlash(__('The splash has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The splash could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Splash.' . $this->Splash->primaryKey => $id));
			$this->request->data = $this->Splash->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Splash->id = $id;
		if (!$this->Splash->exists()) {
			throw new NotFoundException(__('Invalid splash'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Splash->delete()) {
			$this->Session->setFlash(__('The splash has been deleted.'));
		} else {
			$this->Session->setFlash(__('The splash could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
