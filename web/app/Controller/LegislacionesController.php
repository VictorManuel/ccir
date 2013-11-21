<?php
App::uses('AppController', 'Controller');
/**
 * Legislaciones Controller
 *
 * @property Legislacione $Legislacione
 */
class LegislacionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Legislacione->recursive = 0;
		$this->set('legislaciones', $this->paginate());
	}

	public function index() {
		$this->layout = 'backend';
		$this->Legislacione->recursive = 0;
		$this->set('legislaciones', $this->paginate());
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
		if (!$this->Legislacione->exists($id)) {
			throw new NotFoundException(__('Invalid legislacione'));
		}
		$options = array('conditions' => array('Legislacione.' . $this->Legislacione->primaryKey => $id));
		$this->set('legislacione', $this->Legislacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Legislacione->create();
			if ($this->Legislacione->save($this->request->data)) {
				$this->Session->setFlash(__('The legislacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legislacione could not be saved. Please, try again.'));
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
		if (!$this->Legislacione->exists($id)) {
			throw new NotFoundException(__('Invalid legislacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Legislacione->save($this->request->data)) {
				$this->Session->setFlash(__('The legislacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legislacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Legislacione.' . $this->Legislacione->primaryKey => $id));
			$this->request->data = $this->Legislacione->find('first', $options);
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
		$this->Legislacione->id = $id;
		if (!$this->Legislacione->exists()) {
			throw new NotFoundException(__('Invalid legislacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Legislacione->delete()) {
			$this->Session->setFlash(__('Legislacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Legislacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
