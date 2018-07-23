<?php

class Dispatcher {
	var $request;
	function __construct(){
		$this->request = new Request();
Router::parse($this->request->url,$this->request);


$controller = $this->loadController();
		//var_dump(get_class_methods($controller));

		$action = $this->request->action;
//var_dump($this->request); die();	var_dump($action);

		if ($this->request->prefix) {
			$action = $this->request->prefix.'_'.$action;
		}

	if(!in_array($action, array_diff(get_class_methods($controller), get_class_methods('Controller')))){
			$this->error("Ce controlleur ".$this->request->controller." n'a pas de methode ".$action);
		} 
	//debug(in_array($action, array_diff(get_class_methods($controller), get_class_methods('Controller'))));
call_user_func_array(array($controller, $action), $this->request->params);
		$controller->render($action);
		
	}
	
    
	function loadController()
	{
		$name = ucfirst($this->request->controller).'Controller';
		$file = APP.DS.'controller'.DS.$name.'.php';

             // $file2 = file_get_contents($file,&nbsp;FILE_USE_INCLUDE_PATH);
              
            if(!file_exists($file) ){
			$this->error('Le fichier Controller '.$this->request->controller.' n\'existe pas !!');
		}
		require $file;
		$controller = new $name($this->request);
		//$controller->session = new session();
		return $controller;
	}
	
	
         function error($msg){
		$controller = new  Controller($this->request);
		//$controller->session = new session();
		$controller->e404($msg);
		
		
		die();
	}
	
}