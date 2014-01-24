<?php
App::uses('AppController', 'Controller');
/**
 * AboutPages Controller
 *
 * @property AboutPage $AboutPage
 * @property PaginatorComponent $Paginator
 */
class AboutPagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AboutPage->recursive = 0;
		$this->set('aboutPages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AboutPage->exists($id)) {
			throw new NotFoundException(__('Invalid about page'));
		}
		$options = array('conditions' => array('AboutPage.' . $this->AboutPage->primaryKey => $id));
		$this->set('aboutPage', $this->AboutPage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AboutPage->create();
			if ($this->AboutPage->save($this->request->data)) {
				$this->Session->setFlash(__('The about page has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about page could not be saved. Please, try again.'));
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
		if (!$this->AboutPage->exists($id)) {
			throw new NotFoundException(__('Invalid about page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AboutPage->save($this->request->data)) {
				$this->Session->setFlash(__('The about page has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AboutPage.' . $this->AboutPage->primaryKey => $id));
			$this->request->data = $this->AboutPage->find('first', $options);
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
		$this->AboutPage->id = $id;
		if (!$this->AboutPage->exists()) {
			throw new NotFoundException(__('Invalid about page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AboutPage->delete()) {
			$this->Session->setFlash(__('The about page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The about page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
