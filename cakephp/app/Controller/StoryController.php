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
	
	public function index ($storyId = null, $pageNumber = null ) {
		$this->layout = 'admin';
		
		if(empty($pageNumber)) {
			$pageNumber = 1;
			$currentPage = 1;
			$previousPage = 0;
			
		} else {
			if($pageNumber == 1) {
				$currentPage = $pageNumber;
				$previousPage = 0;
				
			} else {
					echo "here";
				$currentPage = $pageNumber;
				$previousPage = $pageNumber - 1;
			}
		}
		
		$nextPage = $pageNumber + 1;
		$story = $this->Story->find('first', array('conditions' => array('_id' => $storyId)));
		$pagesData = $story['Story']['page'];
	
		$pageInfo = array();
		$page = $pagesData[$currentPage]['body'];
		
		$pageInfo['currentPageNumber'] = $currentPage;
		$pageInfo['storyName'] = $story['Story']['storyName'];
		$pageInfo['nextPage'] = $nextPage;
		
		
		$this->set('storyId', $storyId);
		$this->set('page', $page);
		$this->set('nextPage', $nextPage);
		$this->set('previousPage', $previousPage);
		$this->set('pageInfo', $pageInfo);
	
		
	}
	
	public function category( $categoryName = null) {
		
	}
	
}
	