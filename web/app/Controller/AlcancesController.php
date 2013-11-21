<?php
App::uses('AppController', 'Controller');
/**
 * Alcances Controller
 *
 * @property Alcance $Alcance
 */
class AlcancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Alcance->recursive = 0;
		$this->set('alcances', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Alcance->recursive = 0;
		$this->set('alcances', $this->paginate());
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
		if (!$this->Alcance->exists($id)) {
			throw new NotFoundException(__('Invalid alcance'));
		}
		$options = array('conditions' => array('Alcance.' . $this->Alcance->primaryKey => $id));
		$this->set('alcance', $this->Alcance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Alcance->create();
			if ($this->Alcance->save($this->request->data)) {
				$this->Session->setFlash(__('The alcance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alcance could not be saved. Please, try again.'));
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
		if (!$this->Alcance->exists($id)) {
			throw new NotFoundException(__('Invalid alcance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Alcance->save($this->request->data)) {
				$this->Session->setFlash(__('The alcance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alcance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alcance.' . $this->Alcance->primaryKey => $id));
			$this->request->data = $this->Alcance->find('first', $options);
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
		$this->Alcance->id = $id;
		if (!$this->Alcance->exists()) {
			throw new NotFoundException(__('Invalid alcance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Alcance->delete()) {
			$this->Session->setFlash(__('Alcance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Alcance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
