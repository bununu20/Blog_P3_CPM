<?php

class Controller {
	
	public $request;
	private $vars = array();
	public $layout = 'default';
	private $rendered =false;
	public $Form;
	
	function __construct($request = null){
		$this->session = new session();
		if (isset($request)) {
			$this->request = $request;;
		}
		require ROOT.DS.'Config'.DS.'template.php';
		//debug(ROOT.DS.'Config'.DS.'template.php');
	}
	public function render($view){
		if($this->rendered){
			return false;
		}

		extract($this->vars);
		if(strpos($view, '/')===0){
			//$this->layout = 'home';
			$view = APP.DS.'view'.$view.'.php';	 
}
		else {
			$view =  APP.DS.'view'.DS.$this->request->controller.DS.$view.'.php' ;
			//debug($view);
		}
		$view = str_replace('.php.php', '.php', $view);
		
		//debug($this->request->url);
		
	
		ob_start();
		require_once $view;
		//$content_for_layout = ob_get_contents();
		$content_for_layout = ob_get_clean();
		//die($content_for_layout);
	require APP.DS.'view'.DS.'layout'.DS.$this->layout.'.php'; 
		
		
	
$this->rendered = true;
		}
	public function set($key, $value=null){
		if(is_array($key)){
			$this->vars += $key;
		} else {
			$this->vars[$key] = $value;
		}
		
	}
	
	function loadModel($name){
		
		if(!isset($this->$name)){
			$file = APP.DS.'model'.DS.$name.'.php';
			require_once $file;
			$this->$name = new $name();
			if (isset($this->Form)) {
				$this->$name->form = $this->Form;
			}
			
		}
	}
	
	function e404($message){
		header("HTTP/1.0 404 Not found");
		$this->set('message', $message );
		$this->render('/errors/404');
		die('ERREUR -->'.$message);
	}
	
	function request($controller, $action){
		$controller .= 'Controller';
		require_once APP.DS.'controller'.DS.$controller.'.php' ;
		//die(ROOT.DS.'controller'.DS.$controller.'.php');
		$c = new $controller();
		return $c->$action();
	}
	
	
	function redirect($url, $code=null) {
		if ($code ==301) {
			header("HTTP/1.1 301 Moved Permanatly");
		}
		//header("Location: ".Router::url($url));
		//debug(Router::link($url));
		header("Location: ".Router::link($url));
	}
}