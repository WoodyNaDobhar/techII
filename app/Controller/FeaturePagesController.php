<?php
App::uses('AppController', 'Controller');
/**
 * FeaturedPages Controller
 *
 * @property FeaturePage $FeaturePage
 * @property PaginatorComponent $Paginator
 */
class FeaturePagesController extends AppController {

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
		$this->FeaturePage->recursive = 0;
		$this->set('featurePages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FeaturePage->exists($id)) {
			throw new NotFoundException(__('Invalid featurePages'));
		}
		$options = array('conditions' => array('FeaturePage.' . $this->FeaturePage->primaryKey => $id));
		$this->set('featurePage', $this->FeaturePage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['FeaturePage']['image']['name']){

				//update the file name
				$this->request->data['FeaturePage']['image']['name'] = rand(100000, 999999).$this->request->data['FeaturePage']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['FeaturePage']['image'], FILE_FEATURES);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['FeaturePage']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The feature page could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['FeaturePage']['image']);
			}
			$this->FeaturePage->create();
			if ($this->FeaturePage->save($this->request->data)) {
				$this->Session->setFlash(__('The feature page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature page could not be saved. Please, try again.'));
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
		if (!$this->FeaturePage->exists($id)) {
			throw new NotFoundException(__('Invalid featurePages'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['FeaturePage']['image']['name']){

				//update the file name
				$this->request->data['FeaturePage']['image']['name'] = rand(100000, 999999).$this->request->data['FeaturePage']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['FeaturePage']['image'], FILE_FEATURES);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['FeaturePage']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The feature page could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['FeaturePage']['image']);
			}
			if ($this->FeaturePage->save($this->request->data)) {
				$this->Session->setFlash(__('The feature page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FeaturePage.' . $this->FeaturePage->primaryKey => $id));
			$this->request->data = $this->FeaturePage->find('first', $options);
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
		$this->FeaturePage->id = $id;
		if (!$this->FeaturePage->exists()) {
			throw new NotFoundException(__('Invalid feature page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FeaturePage->delete()) {
			$this->Session->setFlash(__('The feature page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The feature page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
