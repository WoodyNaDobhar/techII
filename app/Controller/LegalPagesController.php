<?php
App::uses('AppController', 'Controller');
/**
 * LegalPages Controller
 *
 * @property LegalPage $LegalPage
 * @property PaginatorComponent $Paginator
 * @property ImageUploaderComponent $ImageUploader
 */
class LegalPagesController extends AppController {

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
		$this->LegalPage->recursive = 0;
		$this->set('legalPages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LegalPage->exists($id)) {
			throw new NotFoundException(__('Invalid legal page'));
		}
		$options = array('conditions' => array('LegalPage.' . $this->LegalPage->primaryKey => $id));
		$this->set('legalPage', $this->LegalPage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LegalPage->create();
			if ($this->LegalPage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal page has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal page could not be saved. Please, try again.'));
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
		if (!$this->LegalPage->exists($id)) {
			throw new NotFoundException(__('Invalid legal page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LegalPage->save($this->request->data)) {
				$this->Session->setFlash(__('The legal page has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legal page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LegalPage.' . $this->LegalPage->primaryKey => $id));
			$this->request->data = $this->LegalPage->find('first', $options);
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
		$this->LegalPage->id = $id;
		if (!$this->LegalPage->exists()) {
			throw new NotFoundException(__('Invalid legal page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LegalPage->delete()) {
			$this->Session->setFlash(__('The legal page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The legal page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
