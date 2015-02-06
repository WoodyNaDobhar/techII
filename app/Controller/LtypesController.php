<?php
App::uses('AppController', 'Controller');
/**
 * Ltypes Controller
 *
 * @property Ltype $Ltype
 * @property PaginatorComponent $Paginator
 */
class LtypesController extends AppController {

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
		$this->Ltype->recursive = 0;
		$this->set('ltypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ltype->exists($id)) {
			throw new NotFoundException(__('Invalid ltype'));
		}
		$options = array('conditions' => array('Ltype.' . $this->Ltype->primaryKey => $id));
		$this->set('ltype', $this->Ltype->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Ltype->create();
			if ($this->Ltype->save($this->request->data)) {
				$this->Session->setFlash(__('The ltype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ltype could not be saved. Please, try again.'));
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
		if (!$this->Ltype->exists($id)) {
			throw new NotFoundException(__('Invalid ltype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ltype->save($this->request->data)) {
				$this->Session->setFlash(__('The ltype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ltype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ltype.' . $this->Ltype->primaryKey => $id));
			$this->request->data = $this->Ltype->find('first', $options);
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
		$this->Ltype->id = $id;
		if (!$this->Ltype->exists()) {
			throw new NotFoundException(__('Invalid ltype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ltype->delete()) {
			$this->Session->setFlash(__('The ltype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ltype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
