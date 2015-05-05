<?php
class UsersController extends AppController{

	// public $components = array('Session');
	//public $components = array('RequestHandler');
	/*public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
    	$this->Auth->allow('add', 'logout');
    }


    public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash(__('Invalid username or password, try again'));
    	}
	}

	public function logout() {
    return $this->redirect($this->Auth->logout());
    }
    //public function index(){

		//$this->set('user', $this->User->findById(1));
		//$this->set('event', $this->Event->findById(1));
		//$this->set('users', $this->User->find('all'));

		
	//}*/
	public function front(){
        $this->set('groups', $this->User->Event->find('join'));
	}
	 
	public function test() {
		$this->set('users', $this->User->find('all'));
	}
	 


	//TEST


	

    public function index() {
    	$this->set('user', $this->User->findById(1));

        /*$this->set('user',$this->User->find('all', array( 
        'conditions' => array(
            
            'User.id' => 1)
        ))
        );*/
        //$this->User->recursive = 0;
        //$this->set('users', $this->paginate());
    }

    /*public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }*/

     
     





	
}
 ?>