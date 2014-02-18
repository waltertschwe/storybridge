<?php
App::uses('AppController', 'Controller');

/*
 * Front end Controller for Users
 * 
 */
class StoryController extends AppController {
		
	public $name = 'Story';	
	
	public function home () {
		$this->layout = 'home';
	}
	
	public function index ($storyId = null ) {
		$this->layout = 'admin';
		
		$page = 1;
		
		$story = $this->Story->find('first', array('conditions' => array('_id' => $storyId)));
		
		$pagesData = $story['Story']['page'];
	
		$page = $pagesData[$page]['body'];
		
		$this->set('page', $page);
		
	}
	
}
	