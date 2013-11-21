<?php
App::uses('AppController', 'Controller');
/**
 * Capacitaciones Controller
 *
 * @property Capacitacione $Capacitacione
 */
class NoticiasController extends AppController {
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    
    if($this->Session->read('Auth.User')){
     	$this->Auth->allow(array('lista','add','edit','delete')); // Letting users register themselves
     }
    }
/**
 * index method
 *
 * @return void
 */
	public function index($categoria=null) {
		if(!empty($categoria)){
			$this->Noticia->recursive = 0;
			$this->set('noticias', $this->paginate( array('categoria_id' => $categoria)));
			$this->set('id',$categoria);
		}else{
			$this->redirect(array('controller'=>'pages','action' => 'home'));
		}
	}
	public function lista() {
		$this->layout = 'backend';
		$this->Noticia->recursive = 0;
		$this->set('noticias', $this->paginate());
	}

	public function add() {
		$this->layout = 'backend';
		if ($this->request->is('post')) {
			$this->Noticia->create();
			$capa=$this->request->data;
				$this->Noticia->Behaviors->attach('MeioUpload', array(
			        'portada' => array(
				            'dir' => 'img{DS}noticias',
				            'create_directory' => true,
				            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
				            'default' => 'default.jpg',
				        )
		        ));
				if ($this->Noticia->save($capa)) {
					$this->Session->setFlash(__('La noticia ha sido salvada'));
					$this->redirect(array('action' => 'lista'));
				} else {
					$this->Session->setFlash(__('La noticia no pudo ser salvada. Por favor intentelo nuevamente'));
				}
		}
		$categorias = $this->Noticia->Categoria->find('list',array('fields'=>'nombre'));
		$this->set(compact('categorias'));
	}


	public function edit($id = null) {
		$this->layout = 'backend';
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Noticia inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Noticia->Behaviors->attach('MeioUpload', array(
			        'portada' => array(
				            'dir' => 'img{DS}capacitaciones',
				            'create_directory' => true,
				            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
				            'default' => 'default.jpg',
				        )
			        )
		        );
			if ($this->Noticia->save($this->request->data)) {
				$this->Session->setFlash(__('La noticia ha sido salvada'));
				$this->redirect(array('action' => 'lista'));
			} else {
				$this->Session->setFlash(__('La noticia no pudo ser salvada, por favor intentelo nuevamente'));
			}
		} else {
			$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
			$this->request->data = $this->Noticia->find('first', $options);
		}
		$categorias = $this->Noticia->Categoria->find('list',array('fields'=>'nombre'));
		$this->set(compact('categorias'));
	}

	public function delete($id = null) {
		$this->layout = 'backend';
		$this->Noticia->id = $id;
		if (!$this->Noticia->exists()) {
			throw new NotFoundException(__('Noticia inválida.'));
		}
		$this->request->onlyAllow('post', 'delete');
		$foto = $this->Noticia->find('first',array('conditions'=>array('Noticia.id'=>$id)));
		if (!empty($foto['Noticia']['portada'])){
			unlink('./noticias/'.$foto['Noticia']['portada']);
		}
		if ($this->Noticia->delete()) {
			$this->Session->setFlash(__('Noticia eliminada'));
			$this->redirect(array('action' => 'lista'));
		}
		$this->Session->setFlash(__('La noticia no pudo ser eliminada'));
		$this->redirect(array('action' => 'lista'));
	}
}