<?php

class PagesController extends Controller {
	
	/*function view($nom){
	$this->set(
			array(
					'phrase'=>"Salut Boss",
					'nom'=> 'Machin'					
			));
		$this->render('index');
		
	}
	*/
	public function view($id){
		//$this->render('view');
		//new Model();
		$this->loadModel('Billet');
		$d['page'] = $this->Billet->findFirst(array("conditions"=> array('id'=>$id, 'published'=>'1')));
		if (empty($d['page'])) {
			$this->e404('Page introuvable');
		}
		
		$this->set( $d);
	}
	
	function getMenu(){
		$this->loadModel('Billet');
		return $this->Billet->find(array('conditions'=>array('published'=>1)));
		
	}
	
	
	
}