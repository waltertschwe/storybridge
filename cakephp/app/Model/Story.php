<?php
class Story extends AppModel {
	
    public $name = 'Story';
    public $primaryKey = '_id';
    public $useDbConfig = 'default';
	
	public function beforeSave($options = array()) {
		
	}
	
}	