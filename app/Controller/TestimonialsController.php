<?php
App::uses('AppController', 'Controller');
/**
 * Testimonials Controller
 *
 * @property Testimonial $Testimonial
 * @property PaginatorComponent $Paginator
 */
class TestimonialsController extends AppController {

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
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
		$this->set('testimonial', $this->Testimonial->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			
			//if there's an image uploaded
			if($this->request->data['Testimonial']['image']['name']){

				//update the file name
				$this->request->data['Testimonial']['image']['name'] = rand(100000, 999999).$this->request->data['Testimonial']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Testimonial']['image'], FILE_SPLASH);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Testimonial']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The splash could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Testimonial']['image']);
			}
			$this->Testimonial->create();
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
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
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			//if there's an image uploaded
			if($this->request->data['Testimonial']['image']['name']){

				//update the file name
				$this->request->data['Testimonial']['image']['name'] = rand(100000, 999999).$this->request->data['Testimonial']['image']['name'];
							
				//try to upload the image
				try{
					//call the function upload using the imageuploader component
					$output = $this->ImageUploader->upload($this->request->data['Testimonial']['image'], FILE_TESTI);
								
					//clean up the file_path to be less absolute
					$output['file_path'] = str_replace(SERVER_PATH, '', $output['file_path']);
				
					$this->request->data['Testimonial']['image'] = $output['file_path'];
				}catch(Exception $e){
					$this->Session->setFlash(__('The splash could not be saved:'.$e->getMessage().' Please, try again.'));
				}
			}else{
				
				//if there's nothing there, clean it out
				unset($this->request->data['Testimonial']['image']);
			}
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
			$this->request->data = $this->Testimonial->find('first', $options);
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
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Testimonial->delete()) {
			$this->Session->setFlash(__('The testimonial has been deleted.'));
		} else {
			$this->Session->setFlash(__('The testimonial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
