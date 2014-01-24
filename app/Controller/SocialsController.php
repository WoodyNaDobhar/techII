<?php
App::uses('AppController', 'Controller');
/**
 * Socials Controller
 *
 * @property Social $Social
 * @property PaginatorComponent $Paginator
 */
class SocialsController extends AppController {

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
		$this->Social->recursive = 0;
		$this->set('socials', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Social->exists($id)) {
			throw new NotFoundException(__('Invalid social'));
		}
		$options = array('conditions' => array('Social.' . $this->Social->primaryKey => $id));
		$this->set('social', $this->Social->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Social->create();
			if ($this->Social->save($this->request->data)) {
				$this->Session->setFlash(__('The social has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.'));
			}
		}
		$services = $this->getFreeServices();
		$this->set(compact('services'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Social->exists($id)) {
			throw new NotFoundException(__('Invalid social'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Social->save($this->request->data)) {
				$this->Session->setFlash(__('The social has been saved.'), 'errorless_message');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Social.' . $this->Social->primaryKey => $id));
			$this->request->data = $this->Social->find('first', $options);
		}
		$services = $this->getFreeServices($id);
		$this->set(compact('services'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Social->id = $id;
		if (!$this->Social->exists()) {
			throw new NotFoundException(__('Invalid social'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Social->delete()) {
			$this->Session->setFlash(__('The social has been deleted.'));
		} else {
			$this->Session->setFlash(__('The social could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	/**
	 * 
	 * Get all the social services not currently in use
	 * @return multitype:
	 */
	function getFreeServices($id){
		
		//the whole list
		$base = Configure::read('socials');
		
		//what we're already using
		$usedPile = $this->Social->find('all', array(
			'conditions'	=> array(
				'id !=' => $id
			)
		));
		$used = Set::extract('/Social/service', $usedPile);
		
		$free = array_diff($base, $used);
		
		return $free;
	}
}
