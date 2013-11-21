<?php
App::uses('AppController', 'Controller');
/**
 * Noticiasalbums Controller
 *
 * @property Noticiasalbum $Noticiasalbum
 */
class NoticiasalbumsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Noticiasalbum->recursive = 0;
		$this->set('noticiasalbums', $this->paginate());
	}

	public function lista() {
		$this->layout = 'backend';
		$this->Noticiasalbum->recursive = 0;
		$this->set('noticiasalbums', $this->paginate());
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
		if (!$this->Noticiasalbum->exists($id)) {
			throw new NotFoundException(__('Invalid noticiasalbum'));
		}
		$options = array('conditions' => array('Noticiasalbum.' . $this->Noticiasalbum->primaryKey => $id));
		$this->set('noticiasalbum', $this->Noticiasalbum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Noticiasalbum->create();
			if ($this->Noticiasalbum->save($this->request->data)) {
				$this->Session->setFlash(__('The noticiasalbum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noticiasalbum could not be saved. Please, try again.'));
			}
		}
		$noticias = $this->Noticiasalbum->Noticia->find('list');
		$this->set(compact('noticias'));
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
		if (!$this->Noticiasalbum->exists($id)) {
			throw new NotFoundException(__('Invalid noticiasalbum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Noticiasalbum->save($this->request->data)) {
				$this->Session->setFlash(__('The noticiasalbum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noticiasalbum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Noticiasalbum.' . $this->Noticiasalbum->primaryKey => $id));
			$this->request->data = $this->Noticiasalbum->find('first', $options);
		}
		$noticias = $this->Noticiasalbum->Noticium->find('list');
		$this->set(compact('noticias'));
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
		$this->Noticiasalbum->id = $id;
		if (!$this->Noticiasalbum->exists()) {
			throw new NotFoundException(__('Invalid noticiasalbum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noticiasalbum->delete()) {
			$this->Session->setFlash(__('Noticiasalbum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Noticiasalbum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
