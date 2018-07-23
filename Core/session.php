<?php

class session {
	function __construct() {
		if (!isset($_SESSION)) {
			session_start();
		}
		
	}
	public function setFlash($message, $type='success') {
		$_SESSION['flash']= array(
				'message'=>$message,
				'type'=> $type
		)	;
		
	}
	
	public function flash() {
		
		if (isset($_SESSION['flash']['message'])) {
			
			$html = '<div class="alert alert-'.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>';
			//echo ($html);
			$_SESSION['flash']= array();
			return $html;
		}
	}
	
	public function set( $key , $value){
		
		$_SESSION[$key] = $value; 
		
		
	}
	public  function delete($name){
		unset($_SESSION[$name]);
	}
	
	public  function read($key=null){
		if ($key) {
			if ($_SESSION[$key]) {
				return $_SESSION[$key];;
			}
			else { return false;}
		}else {
			return $_SESSION;
		}
	}
	
	public function isLogged() {
		return isset($_SESSION['User']->id);
	}
	
}