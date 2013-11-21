<?php
App::uses('AppController', 'Controller');
/**
 * Circulares Controller
 *
 * @property Circulare $Circulare
 */
class CircularesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Circulare->recursive = 0;
		$this->set('circulares', $this->paginate());
	}
	
	public function lista() {
		$this->layout = 'backend';
		$this->Circulare->recursive = 0;
		$this->set('circulares', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'backend';
		if (!$this->Circulare->exists($id)) {
			throw new NotFoundException(__('Invalid circulare'));
		}
		$options = array('conditions' => array('Circulare.' . $this->Circulare->primaryKey => $id));
		$this->set('circulare', $this->Circulare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Circulare->create();
			if ($this->Circulare->save($this->request->data)) {
				$this->Session->setFlash(__('The circulare has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The circulare could not be saved. Please, try again.'));
			}
		}
		$users = $this->Circulare->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'backend';
		if (!$this->Circulare->exists($id)) {
			throw new NotFoundException(__('Invalid circulare'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Circulare->save($this->request->data)) {
				$this->Session->setFlash(__('The circulare has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The circulare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Circulare.' . $this->Circulare->primaryKey => $id));
			$this->request->data = $this->Circulare->find('first', $options);
		}
		$users = $this->Circulare->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'backend';
		$this->Circulare->id = $id;
		if (!$this->Circulare->exists()) {
			throw new NotFoundException(__('Invalid circulare'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Circulare->delete()) {
			$this->Session->setFlash(__('Circulare deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Circulare was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
