<?php

class Request {
	public $url; //url appelée par l'utilisateur
	public $page = 1;
	public $prefix ='';
	public $data =false;
	
function __construct(){
	
//var_dump($_SERVER['']); //die();	
$this->url =isset($_SERVER['REQUEST_URI'])? $_SERVER['REQUEST_URI'] : '/';
	//debug($this->url);

	if (isset($_GET['page'])) {
		if (is_numeric($_GET['page'])) {
			//die($_GET['page']);
			if ($_GET['page']>0) {
				$this->page=round($_GET['page']);
			}
			
		}
	}
	
	
	if (!empty($_POST)) {
		$this->data = new stdClass();
		foreach ($_POST as $k => $v) {
			$this->data->$k = $v;
		}
		/*debug($this->data);
		debug($_POST);
		die();*/
		
	}
	
}

}

?>