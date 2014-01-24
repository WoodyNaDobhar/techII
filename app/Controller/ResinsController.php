<?php
App::uses('AppController', 'Controller');
/**
 * Resins Controller
 *
 * @property Resin $Resin
 * @property PaginatorComponent $Paginator
 */
class ResinsController extends AppController {

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
		$this->Resin->recursive = 0;
		$this->set('resins', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Resin->exists($id)) {
			throw new NotFoundException(__('Invalid resin'));
		}
		$options = array('conditions' => array('Resin.' . $this->Resin->primaryKey => $id));
		$this->set('resin', $this->Resin->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Resin->create();
			if ($this->Resin->save($this->request->data)) {
				$this->Session->setFlash(__('The resin has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resin could not be saved. Please, try again.'));
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
		if (!$this->Resin->exists($id)) {
			throw new NotFoundException(__('Invalid resin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Resin->save($this->request->data)) {
				$this->Session->setFlash(__('The resin has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Resin.' . $this->Resin->primaryKey => $id));
			$this->request->data = $this->Resin->find('first', $options);
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
		$this->Resin->id = $id;
		if (!$this->Resin->exists()) {
			throw new NotFoundException(__('Invalid resin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Resin->delete()) {
			$this->Session->setFlash(__('The resin has been deleted.'));
		} else {
			$this->Session->setFlash(__('The resin could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
