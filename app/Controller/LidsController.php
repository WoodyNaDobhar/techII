<?php
App::uses('AppController', 'Controller');
/**
 * Lids Controller
 *
 * @property Lid $Lid
 * @property PaginatorComponent $Paginator
 */
class LidsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'ImageUploader');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lid->recursive = 0;
		$this->set('lids', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lid->exists($id)) {
			throw new NotFoundException(__('Invalid lid'));
		}
		$options = array('conditions' => array('Lid.' . $this->Lid->primaryKey => $id));
		$this->set('lid', $this->Lid->find('first', $options));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Lid->recursive = 0;
		$this->set('lids', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lid->exists($id)) {
			throw new NotFoundException(__('Invalid lid'));
		}
		$options = array('conditions' => array('Lid.' . $this->Lid->primaryKey => $id));
		$this->set('lid', $this->Lid->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['Lid']['image']['name']){

				//update the file name
				$this->request->data['Lid']['image']['name'] = rand(100000, 999999).$this->request->data['Lid']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Lid']['image'], FILE_LIDS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Lid']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The lid could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Lid']['image']);
			}
			$this->Lid->create();
			if ($this->Lid->save($this->request->data)) {
				$this->Session->setFlash(__('The lid has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lid could not be saved. Please, try again.'));
			}
		}
		$ctypes = $this->Lid->Ctype->find('list');
		$resins = $this->Lid->Resin->find('list');
		$containers = $this->Lid->Container->find('list');
		$this->set(compact('ctypes', 'resins', 'containers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Lid->exists($id)) {
			throw new NotFoundException(__('Invalid lid'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['Lid']['image']['name']){

				//update the file name
				$this->request->data['Lid']['image']['name'] = rand(100000, 999999).$this->request->data['Lid']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Lid']['image'], FILE_LIDS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Lid']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The lid could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Lid']['image']);
			}
			if ($this->Lid->save($this->request->data)) {
				$this->Session->setFlash(__('The lid has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lid could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lid.' . $this->Lid->primaryKey => $id));
			$this->request->data = $this->Lid->find('first', $options);
		}
		$ctypes = $this->Lid->Ctype->find('list');
		$resins = $this->Lid->Resin->find('list');
		$containers = $this->Lid->Container->find('list');
		$this->set(compact('ctypes', 'resins', 'containers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Lid->id = $id;
		if (!$this->Lid->exists()) {
			throw new NotFoundException(__('Invalid lid'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lid->delete()) {
			$this->Session->setFlash(__('The lid has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lid could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
