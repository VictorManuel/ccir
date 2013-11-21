<?php
App::uses('AppController', 'Controller');
/**
 * Actividades Controller
 *
 * @property Actividade $Actividade
 */
class ActividadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Actividade->recursive = 0;
		$this->set('actividades', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Actividade->recursive = 0;
		$this->set('actividades', $this->paginate());
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
		if (!$this->Actividade->exists($id)) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		$options = array('conditions' => array('Actividade.' . $this->Actividade->primaryKey => $id));
		$this->set('actividade', $this->Actividade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Actividade->create();
			if ($this->Actividade->save($this->request->data)) {
				$this->Session->setFlash(__('The actividade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividade could not be saved. Please, try again.'));
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
		if (!$this->Actividade->exists($id)) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Actividade->save($this->request->data)) {
				$this->Session->setFlash(__('The actividade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actividade.' . $this->Actividade->primaryKey => $id));
			$this->request->data = $this->Actividade->find('first', $options);
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
		$this->Actividade->id = $id;
		if (!$this->Actividade->exists()) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Actividade->delete()) {
			$this->Session->setFlash(__('Actividade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actividade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
