<?php
App::uses('AppController', 'Controller');
/**
 * Padrones Controller
 *
 * @property Padrone $Padrone
 */
class PadronesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Padrone->recursive = 0;
		$this->set('padrones', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Padrone->recursive = 0;
		$this->set('padrones', $this->paginate());
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
		if (!$this->Padrone->exists($id)) {
			throw new NotFoundException(__('Invalid padrone'));
		}
		$options = array('conditions' => array('Padrone.' . $this->Padrone->primaryKey => $id));
		$this->set('padrone', $this->Padrone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Padrone->create();
			if ($this->Padrone->save($this->request->data)) {
				$this->Session->setFlash(__('The padrone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padrone could not be saved. Please, try again.'));
			}
		}
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
		if (!$this->Padrone->exists($id)) {
			throw new NotFoundException(__('Invalid padrone'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Padrone->save($this->request->data)) {
				$this->Session->setFlash(__('The padrone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padrone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Padrone.' . $this->Padrone->primaryKey => $id));
			$this->request->data = $this->Padrone->find('first', $options);
		}
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
		$this->Padrone->id = $id;
		if (!$this->Padrone->exists()) {
			throw new NotFoundException(__('Invalid padrone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Padrone->delete()) {
			$this->Session->setFlash(__('Padrone deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Padrone was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
