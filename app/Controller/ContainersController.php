<?php
App::uses('AppController', 'Controller');
/**
 * Containers Controller
 *
 * @property Container $Container
 * @property PaginatorComponent $Paginator
 */
class ContainersController extends AppController {

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
		$this->Container->recursive = 0;
		$this->set('containers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Container->exists($id)) {
			throw new NotFoundException(__('Invalid container'));
		}
		$options = array('conditions' => array('Container.' . $this->Container->primaryKey => $id));
		$this->set('container', $this->Container->find('first', $options));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Container->recursive = 0;
		$this->set('containers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Container->exists($id)) {
			throw new NotFoundException(__('Invalid container'));
		}
		$options = array('conditions' => array('Container.' . $this->Container->primaryKey => $id));
		$this->set('container', $this->Container->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['Container']['image']['name']){

				//update the file name
				$this->request->data['Container']['image']['name'] = rand(100000, 999999).$this->request->data['Container']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Container']['image'], FILE_CONTAINERS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Container']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The container could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Container']['image']);
			}
			$this->Container->create();
			if ($this->Container->save($this->request->data)) {
				$this->Session->setFlash(__('The container has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The container could not be saved. Please, try again.'));
			}
		}
		$ctypes = $this->Container->Ctype->find('list');
		$resins = $this->Container->Resin->find('list');
		$lids = $this->Container->Lid->find('list');
		$this->set(compact('ctypes', 'resins', 'lids'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Container->exists($id)) {
			throw new NotFoundException(__('Invalid container'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['Container']['image']['name']){

				//update the file name
				$this->request->data['Container']['image']['name'] = rand(100000, 999999).$this->request->data['Container']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Container']['image'], FILE_CONTAINERS);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Container']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The container could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Container']['image']);
			}
			if ($this->Container->save($this->request->data)) {
				$this->Session->setFlash(__('The container has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The container could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Container.' . $this->Container->primaryKey => $id));
			$this->request->data = $this->Container->find('first', $options);
		}
		$ctypes = $this->Container->Ctype->find('list');
		$resins = $this->Container->Resin->find('list');
		$lids = $this->Container->Lid->find('list');
		$this->set(compact('ctypes', 'resins', 'lids'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Container->id = $id;
		if (!$this->Container->exists()) {
			throw new NotFoundException(__('Invalid container'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Container->delete()) {
			$this->Session->setFlash(__('The container has been deleted.'));
		} else {
			$this->Session->setFlash(__('The container could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
