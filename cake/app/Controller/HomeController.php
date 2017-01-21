<?php

class HomeController extends AppController {
    public $helpers = array ('Html','Form');
    
	function index() {
        
		$this->loadModel('User'); 
       	$this->set('users', $this->User->find('all'));
    }
	


}


?>