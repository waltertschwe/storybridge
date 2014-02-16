<?php
App::uses('AppController', 'Controller');

class StoryController extends AppController {
		
	public $name = 'Story';	
		
	public function test() {
		
		## Test Monogo CRUD
	
		## Read All
		$stories = $this->Story->find('all');
		$this->set('stories', $stories);
		
		$params = array();
		$params['author'] = 'Walter Schweitzer';
		$authorResults = $this->Story->find('all', $params);
		$this->set('authorResults', $authorResults);
		
		## Insert
		$data = array();
		#$data['author'] = 'Walter Schweitzer';
		#$data['description'] = "the test story";
		#$data['storyName'] = "this is the Test STory"; 
		if (!empty($data)) {
			$this->Story->create();
			if ($this->Story->save($data)) {
				echo "data inserted";
			} else {
				echo "data insert failed";
			}
		}


		
		## Update
		
		## Delete
		$id = "52f91bd2ca50a99e398b4567";
		if ($this->Story->delete($id)) {
			echo "story deleted";
		} else {
			echo "story was not deleted";
		}
	}
}
	