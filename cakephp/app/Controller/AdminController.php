<?php
App::uses('AppController', 'Controller');

class AdminController extends AppController {
	
	public $uses = array('Story');
	
	// STORY CONTROLLERS
	public function index() {
		$this->layout = 'admin';
		$stories = $this->Story->find('all');
		$this->set('stories', $stories);
	}
	
	
	public function storyadd() {
		$this->layout = 'admin-editor';
		
		if (!empty($this->data)) {
				$this->Story->create();
			if ($this->Story->save($this->data)) {
				$this->Session->setFlash(__('Your Story has been created!'));
                return $this->redirect(array('action' => 'index'));
			} else {
				 $this->Session->setFlash(__('Unable to create your story.'));
			}
		}
	}
	
	public function deleteStory($storyId) {
		$this->layout = 'admin';
		if ($this->Story->delete($storyId)) {
			echo "story deleted";
		} else {
			echo "story was not deleted";
		}
	}
	
	// PAGES CONTROLLERS
	public function pages($storyId) {
		$this->layout = 'admin';
		$story = $this->Story->find('first', array('conditions' => array( '_id' => $storyId)));
		$pages = $story['Story']['page'];
		$this->set('story', $story);
		$this->set('pages', $pages);
		
	}
	
	public function pageadd($storyId) {
		$this->layout = 'admin-editor';
		$story = $this->Story->find('first', array('conditions' => array('_id' => $storyId)));
		
		$this->set('story', $story);
		if (!empty($this->data)) {
			 
			$postData = $this->data;
			$body = $postData['Page']['body'];
			$desc = $postData['Page']['desc'];
		
			$choice = "false";
			$pageData = $story['Story']['page'];
			$pageCount = count($pageData);
			
			if($pageCount >= 1) {
				$newPage  = ++$pageCount;
 				$pageData[$newPage] = array('body' => $body, 'desc' => $desc, 'choice' => $choice);
				$story['Story']['page'] = $pageData;
				
			} else {
				// First page
				$story['Story']['page'] = array();
				$story['Story']['page'] = array('1' => array('body' => $body, 'choice' => $choice, 'desc' => $desc));
				//$story['Story']['page'] = array('1' => 'page 1 data', '2' => 'page2 data');
			}
			
			// Save Story with new Page
			if ($this->Story->save($story)) {
				$this->Session->setFlash(__('Your Page has been created!'));
			} else {
				$this->Session->setFlash(__('Page creation failed'));
			}
			
		}
	}
	
}

