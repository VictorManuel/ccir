<?php 
class UsersController extends AppController {

    public function beforeFilter() {
    parent::beforeFilter();
     	$this->Auth->allow(array('login')); // Letting users register themselves
     if($this->Session->read('Auth.User')){
     	$this->Auth->allow(array('logout')); // Letting users register themselves
     }
     #admin options
     if($this->Session->read('Auth.User.nivele_id') == 1){
        $this->Auth->allow(array('index','edit','add','delete'));
     }
	}

	public function login() 
    {
        $this->layout='backend';
        if($this->request->is('post')){
        {
              if($this->Auth->login()){
                  $this->loginUser = AuthComponent::user();  // Here $this->loginUser is defined so we can get the user values here. 
                  return $this->redirect($this->Auth->redirect());
              }else{
                  $this->Session->setFlash('Username or password is incorrect', 'default', array(), 'auth');
              }
          }   
         
        }
    }

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

    public function index() {
        $this->layout='backend';
        $this->set('users', $this->paginate());
    }


    public function add() {
        $this->layout='backend';
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

    public function edit($id = null) {
        $this->layout='backend';
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->onlyAllow('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
}