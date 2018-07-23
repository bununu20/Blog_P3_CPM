<?php
	if (isset($this->request->prefix)){
	if ($this->request->prefix =='admin') {
		//$this->$layout='admin.php';
		$this->layout = 'admin2';
		if (! $this->session->isLogged()) {
			$this->redirect('users/login');
		}
	}
	else{
if (!isset($this->request->controller) OR $this->request->controller=='billets') {
if(!isset($this->request->action) OR $this->request->action=='index'){
	$this->layout = 'home';
}
}
	
	}
	
	
	}

