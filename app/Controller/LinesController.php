<?php
App::uses('AppController', 'Controller');
/**
 * Lines Controller
 *
 * @property Line $Line
 * @property PaginatorComponent $Paginator
 */
class LinesController extends AppController {

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
		$this->Line->recursive = 0;
		$this->set('lines', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Line->exists($id)) {
			throw new NotFoundException(__('Invalid line'));
		}
		$options = array('conditions' => array('Line.' . $this->Line->primaryKey => $id));
		$this->set('line', $this->Line->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Line->create();
			if ($this->Line->save($this->request->data)) {
				$this->Session->setFlash(__('The line has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line could not be saved. Please, try again.'));
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
		if (!$this->Line->exists($id)) {
			throw new NotFoundException(__('Invalid line'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Line->save($this->request->data)) {
				$this->Session->setFlash(__('The line has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Line.' . $this->Line->primaryKey => $id));
			$this->request->data = $this->Line->find('first', $options);
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
		$this->Line->id = $id;
		if (!$this->Line->exists()) {
			throw new NotFoundException(__('Invalid line'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Line->delete()) {
			$this->Session->setFlash(__('The line has been deleted.'));
		} else {
			$this->Session->setFlash(__('The line could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
