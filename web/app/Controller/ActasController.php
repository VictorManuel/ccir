<?php
App::uses('AppController', 'Controller');
/**
 * Actas Controller
 *
 * @property Acta $Acta
 */
class ActasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Acta->recursive = 0;
		$this->set('actas', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Acta->recursive = 0;
		$this->set('actas', $this->paginate());
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
		if (!$this->Acta->exists($id)) {
			throw new NotFoundException(__('Invalid acta'));
		}
		$options = array('conditions' => array('Acta.' . $this->Acta->primaryKey => $id));
		$this->set('acta', $this->Acta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Acta->create();
			if ($this->Acta->save($this->request->data)) {
				$this->Session->setFlash(__('The acta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acta could not be saved. Please, try again.'));
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
		if (!$this->Acta->exists($id)) {
			throw new NotFoundException(__('Invalid acta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Acta->save($this->request->data)) {
				$this->Session->setFlash(__('The acta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Acta.' . $this->Acta->primaryKey => $id));
			$this->request->data = $this->Acta->find('first', $options);
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
		$this->Acta->id = $id;
		if (!$this->Acta->exists()) {
			throw new NotFoundException(__('Invalid acta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Acta->delete()) {
			$this->Session->setFlash(__('Acta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Acta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
