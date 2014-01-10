<?php
App::uses('AppController', 'Controller');
/**
 * ProcessesPages Controller
 *
 * @property ProcessesPage $ProcessesPage
 * @property PaginatorComponent $Paginator
 */
class ProcessesPagesController extends AppController {

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
		$this->ProcessesPage->recursive = 0;
		$this->set('processesPages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProcessesPage->exists($id)) {
			throw new NotFoundException(__('Invalid processes page'));
		}
		$options = array('conditions' => array('ProcessesPage.' . $this->ProcessesPage->primaryKey => $id));
		$this->set('processesPage', $this->ProcessesPage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['ProcessPage']['nav_image']['name']){

				//update the file name
				$this->request->data['ProcessPage']['nav_image']['name'] = rand(100000, 999999).$this->request->data['ProcessPage']['nav_image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['ProcessPage']['nav_image'], FILE_NAV);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['ProcessPage']['nav_image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The process page could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['ProcessPage']['nav_image']);
			}
			$this->ProcessesPage->create();
			if ($this->ProcessesPage->save($this->request->data)) {
				$this->Session->setFlash(__('The processes page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processes page could not be saved. Please, try again.'));
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
		if (!$this->ProcessesPage->exists($id)) {
			throw new NotFoundException(__('Invalid processes page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['ProcessPage']['nav_image']['name']){

				//update the file name
				$this->request->data['ProcessPage']['nav_image']['name'] = rand(100000, 999999).$this->request->data['ProcessPage']['nav_image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['ProcessPage']['nav_image'], FILE_NAV);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['ProcessPage']['nav_image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The process page could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['ProcessPage']['nav_image']);
			}
			if ($this->ProcessesPage->save($this->request->data)) {
				$this->Session->setFlash(__('The processes page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processes page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProcessesPage.' . $this->ProcessesPage->primaryKey => $id));
			$this->request->data = $this->ProcessesPage->find('first', $options);
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
		$this->ProcessesPage->id = $id;
		if (!$this->ProcessesPage->exists()) {
			throw new NotFoundException(__('Invalid processes page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProcessesPage->delete()) {
			$this->Session->setFlash(__('The processes page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The processes page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
