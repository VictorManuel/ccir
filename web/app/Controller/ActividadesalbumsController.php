<?php
App::uses('AppController', 'Controller');
/**
 * Actividadesalbums Controller
 *
 * @property Actividadesalbum $Actividadesalbum
 */
class ActividadesalbumsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Actividadesalbum->recursive = 0;
		$this->set('actividadesalbums', $this->paginate());
	}

	public function index() {
		$this->layout = 'backend';
		$this->Actividadesalbum->recursive = 0;
		$this->set('actividadesalbums', $this->paginate());
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
		if (!$this->Actividadesalbum->exists($id)) {
			throw new NotFoundException(__('Invalid actividadesalbum'));
		}
		$options = array('conditions' => array('Actividadesalbum.' . $this->Actividadesalbum->primaryKey => $id));
		$this->set('actividadesalbum', $this->Actividadesalbum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Actividadesalbum->create();
			if ($this->Actividadesalbum->save($this->request->data)) {
				$this->Session->setFlash(__('The actividadesalbum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividadesalbum could not be saved. Please, try again.'));
			}
		}
		$padrones = $this->Actividadesalbum->Padrone->find('list');
		$actividades = $this->Actividadesalbum->Actividade->find('list');
		$this->set(compact('padrones', 'actividades'));
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
		if (!$this->Actividadesalbum->exists($id)) {
			throw new NotFoundException(__('Invalid actividadesalbum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Actividadesalbum->save($this->request->data)) {
				$this->Session->setFlash(__('The actividadesalbum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividadesalbum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actividadesalbum.' . $this->Actividadesalbum->primaryKey => $id));
			$this->request->data = $this->Actividadesalbum->find('first', $options);
		}
		$padrones = $this->Actividadesalbum->Padrone->find('list');
		$actividades = $this->Actividadesalbum->Actividade->find('list');
		$this->set(compact('padrones', 'actividades'));
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
		$this->Actividadesalbum->id = $id;
		if (!$this->Actividadesalbum->exists()) {
			throw new NotFoundException(__('Invalid actividadesalbum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Actividadesalbum->delete()) {
			$this->Session->setFlash(__('Actividadesalbum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actividadesalbum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
