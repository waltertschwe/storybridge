<?php

App::uses('AppController', 'Controller');

class AdminusersController extends AppController {
	
	public $uses = array('Adminuser');
	
	public function login() {
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	}
	
	public function logout() {
		 return $this->redirect($this->Auth->logout());
	}
	
	public function index() {
		$this->layout = 'admin';
		$adminUsers = $this->Adminuser->find('all');
		$this->set('adminUsers', $adminUsers);
		
	}

	public function add() {
		$this->layout = 'admin';
        if ($this->request->is('post')) {
            $this->Adminuser->create();
            if ($this->Adminuser->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
			
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

}