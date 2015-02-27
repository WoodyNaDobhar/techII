<?php
App::uses('AppController', 'Controller');
/**
 * Decorations Controller
 *
 * @property Decoration $Decoration
 * @property PaginatorComponent $Paginator
 */
class DecorationsController extends AppController {

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
		$this->Decoration->recursive = 0;
		$this->set('decorations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Decoration->exists($id)) {
			throw new NotFoundException(__('Invalid decoration'));
		}
		$options = array('conditions' => array('Decoration.' . $this->Decoration->primaryKey => $id));
		$this->set('decoration', $this->Decoration->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Decoration->create();
			if ($this->Decoration->save($this->request->data)) {
				$this->Session->setFlash(__('The decoration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decoration could not be saved. Please, try again.'));
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
		if (!$this->Decoration->exists($id)) {
			throw new NotFoundException(__('Invalid decoration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Decoration->save($this->request->data)) {
				$this->Session->setFlash(__('The decoration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decoration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Decoration.' . $this->Decoration->primaryKey => $id));
			$this->request->data = $this->Decoration->find('first', $options);
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
		$this->Decoration->id = $id;
		if (!$this->Decoration->exists()) {
			throw new NotFoundException(__('Invalid decoration'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Decoration->delete()) {
			$this->Session->setFlash(__('The decoration has been deleted.'));
		} else {
			$this->Session->setFlash(__('The decoration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
