<?php
class EventsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	public function events_list(){

		$this->set('events', $this->Event->find('all'));
		//$this->set('event', $this->Event->findById(1));
		//$this->set('users', $this->User->find('all'));

		
	}
	public function test() {
		//$this->set('events', $this->Event->find('all'));


		$this->set('events',$this->Event->find('all', array( 
		'conditions' => array(
		    
		    'Event.id' => 1)
		))
		);
	}

public function view($id) {

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Event->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
 // DELETE Event

 public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Event->delete($id)) {
        $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The post with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
	}
	
//EDIT Event

	public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Event->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
	}
	 
public function close() {
    
    return $this->redirect(array('action' => '../users/index'));
	}

// JOIn to the event
public function join($id){
 
     $this->EventUser->create();
            $data = array('event_id' => $id, 'user_id' => 1);
            if ($this->Event->save($data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
             
            }else{
            $this->Session->setFlash(__('Unable to add your post.'));
    		}

	return $this->redirect(array('action' => '../users/index'));


}

public function add() {
        if ($this->request->is('post')) {
            $this->Event->create();
            if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => '../users/index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }

public function event_form(){
	if ($this->request->is('post')) {
            $this->Event->create();
            if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => '../users/index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
}


}
 ?>