<?php
App::uses('AppController', 'Controller');
/**
 * Legislaciontipos Controller
 *
 * @property Legislaciontipo $Legislaciontipo
 */
class LegislaciontiposController extends AppController {

/**
 * index method
 *
 * @return void
 */	
	public function beforeFilter() {
		parent::beforeFilter();
	    $this->Auth->allow(array('login')); // Letting users register themselves
	    if($this->Session->read('Auth.User')){
	     	$this->Auth->allow(array('listado')); // Letting users register themselves
	    }
	    #admin options
	    if($this->Session->read('Auth.User.nivele_id') == 1 ||$this->Session->read('Auth.User.nivele_id') == 2){
	    	$this->Auth->allow(array('index','edit','add','delete'));
	    }
	}

	public function index() {
		$this->layout = 'backend';
		$this->Legislaciontipo->recursive = 0;
		$this->set('legislaciontipos', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Legislaciontipo->recursive = 0;
		$this->set('legislaciontipos', $this->paginate());
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
		if (!$this->Legislaciontipo->exists($id)) {
			throw new NotFoundException(__('Invalid legislaciontipo'));
		}
		$options = array('conditions' => array('Legislaciontipo.' . $this->Legislaciontipo->primaryKey => $id));
		$this->set('legislaciontipo', $this->Legislaciontipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Legislaciontipo->create();
			if ($this->Legislaciontipo->save($this->request->data)) {
				$this->Session->setFlash(__('The legislaciontipo has been saved'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legislaciontipo could not be saved. Please, try again.'));
			}
		}
		$alcances = $this->Legislaciontipo->Alcance->find('list',array('fields'=>'nombre'));
		$this->set(compact('alcances'));
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
		if (!$this->Legislaciontipo->exists($id)) {
			throw new NotFoundException(__('Invalid legislaciontipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Legislaciontipo->save($this->request->data)) {
				$this->Session->setFlash(__('The legislaciontipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The legislaciontipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Legislaciontipo.' . $this->Legislaciontipo->primaryKey => $id));
			$this->request->data = $this->Legislaciontipo->find('first', $options);
		}
		$alcances = $this->Legislaciontipo->Alcance->find('list');
		$this->set(compact('alcances'));
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
		$this->Legislaciontipo->id = $id;
		if (!$this->Legislaciontipo->exists()) {
			throw new NotFoundException(__('Invalid legislaciontipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Legislaciontipo->delete()) {
			$this->Session->setFlash(__('Legislaciontipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Legislaciontipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
