<?php
App::uses('AppController', 'Controller');
/**
 * Perfiles Controller
 *
 * @property Perfile $Perfile
 */
class PerfilesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Perfile->recursive = 0;
		$this->set('perfiles', $this->paginate());
	}
	public function lista() {
		$this->layout = 'backend';
		$this->Perfile->recursive = 0;
		$this->set('perfiles', $this->paginate());
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
		if (!$this->Perfile->exists($id)) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		$options = array('conditions' => array('Perfile.' . $this->Perfile->primaryKey => $id));
		$this->set('perfile', $this->Perfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Perfile->create();
			if ($this->Perfile->save($this->request->data)) {
				$this->Session->setFlash(__('The perfile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfile could not be saved. Please, try again.'));
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
		if (!$this->Perfile->exists($id)) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Perfile->save($this->request->data)) {
				$this->Session->setFlash(__('The perfile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Perfile.' . $this->Perfile->primaryKey => $id));
			$this->request->data = $this->Perfile->find('first', $options);
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
		$this->Perfile->id = $id;
		if (!$this->Perfile->exists()) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Perfile->delete()) {
			$this->Session->setFlash(__('Perfile deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Perfile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
