<?php
class EventsUsersController extends AppController{


	public function test() {
		$this->set('attends', $this->Event_User->find('all'));
	}
}