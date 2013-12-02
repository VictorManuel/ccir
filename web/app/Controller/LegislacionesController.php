<?php
App::uses('AppController', 'Controller');
/**
 * Legislaciones Controller
 *
 * @property Legislacione $Legislacione
 */
class LegislacionesController extends AppController {
	public $components = array('Filer');
/**
 * index method
 *
 * @return void
 */

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow(array('login')); // Letting users register themselves
	    if($this->Session->read('Auth.User')){
	     	$this->Auth->allow(array('lista')); // Letting users register themselves
	    }
	    #admin options
	    if($this->Session->read('Auth.User.nivele_id') == 1 ||$this->Session->read('Auth.User.nivele_id') == 2){
	    	$this->Auth->allow(array('index','edit','add','delete'));
	    }
	}

	public function index() {
		$this->layout = 'backend';
		$this->Legislacione->recursive = 0;
		$this->set('legislaciones', $this->paginate());
	}

	public function listado($alcance = null,$tipo = null) {
		$this->Legislacione->recursive = 2;
		$legislaciones = $this->Legislacione->find('all',array(
												'conditions' => array('Legislacione.legislacionetipo_id =' => $tipo, "Legislacionetipo.alcance_id ="=> $alcance)
			));
		$this->set('legislaciones', $legislaciones);
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
			$legislacion = $this->request->data;
			$legislacion['Legislacione']['documento'] = $this->Filer->upload($legislacion['Legislacione']['documento'],null,"files/legislaciones"); 
			if($legislacion['Legislacione']['documento'] != ""){
				$this->Legislacione->create();
				if ($this->Legislacione->save($legislacion)) {
					$this->Session->setFlash(__('La legislacion fue salvada con éxito'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('La legislación no pudo ser guardada. Por favor inténtelo de nuevo.'));
				}
			}else{
				$this->Session->setFlash('Hubo un problema cargando el documento. Por favor inténtelo nuevamente.');
			}
		}
		$legi = $this->Legislacione->Legislaciontipo->find('list',array('fields'=>'Legislaciontipo.nombre'));
		$this->set('legislaciontipos',$legi);
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
