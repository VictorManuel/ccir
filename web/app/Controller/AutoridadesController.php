<?php
App::uses('AppController', 'Controller');
/**
 * Autoridades Controller
 *
 * @property Autoridade $Autoridade
 */
class AutoridadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Autoridade->recursive = 0;
		$this->set('autoridades', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Autoridade->recursive = 0;
		$this->set('autoridades', $this->paginate());
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
		if (!$this->Autoridade->exists($id)) {
			throw new NotFoundException(__('Invalid autoridade'));
		}
		$options = array('conditions' => array('Autoridade.' . $this->Autoridade->primaryKey => $id));
		$this->set('autoridade', $this->Autoridade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Autoridade->create();
			if ($this->Autoridade->save($this->request->data)) {
				$this->Session->setFlash(__('The autoridade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autoridade could not be saved. Please, try again.'));
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
		if (!$this->Autoridade->exists($id)) {
			throw new NotFoundException(__('Invalid autoridade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Autoridade->save($this->request->data)) {
				$this->Session->setFlash(__('The autoridade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The autoridade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Autoridade.' . $this->Autoridade->primaryKey => $id));
			$this->request->data = $this->Autoridade->find('first', $options);
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
		$this->Autoridade->id = $id;
		if (!$this->Autoridade->exists()) {
			throw new NotFoundException(__('Invalid autoridade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Autoridade->delete()) {
			$this->Session->setFlash(__('Autoridade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Autoridade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
