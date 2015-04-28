<?php
class UsersController extends AppController{
	//public $components = array('RequestHandler');
	public function index(){

		$this->set('user', $this->User->findById(1));

		//$this->set('users', $this->User->find('all'));

		
	}

	public function add() {
		$this->set('user', $this->User->findById(1));
	}

}
 ?>