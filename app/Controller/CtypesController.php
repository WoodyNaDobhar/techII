<?php
App::uses('AppController', 'Controller');
/**
 * Ctypes Controller
 *
 * @property Ctype $Ctype
 * @property PaginatorComponent $Paginator
 */
class CtypesController extends AppController {

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
		$this->Ctype->recursive = 0;
		$this->set('ctypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ctype->exists($id)) {
			throw new NotFoundException(__('Invalid ctype'));
		}
		$options = array('conditions' => array('Ctype.' . $this->Ctype->primaryKey => $id));
		$this->set('ctype', $this->Ctype->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Ctype->create();
			if ($this->Ctype->save($this->request->data)) {
				$this->Session->setFlash(__('The ctype has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctype could not be saved. Please, try again.'));
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
		if (!$this->Ctype->exists($id)) {
			throw new NotFoundException(__('Invalid ctype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ctype->save($this->request->data)) {
				$this->Session->setFlash(__('The ctype has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ctype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ctype.' . $this->Ctype->primaryKey => $id));
			$this->request->data = $this->Ctype->find('first', $options);
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
		$this->Ctype->id = $id;
		if (!$this->Ctype->exists()) {
			throw new NotFoundException(__('Invalid ctype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ctype->delete()) {
			$this->Session->setFlash(__('The ctype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ctype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
