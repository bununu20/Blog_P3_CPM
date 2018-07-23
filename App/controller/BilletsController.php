<?php

class BilletsController extends Controller {
	
	
	function index(){
		$perPage = 3;
		$this->loadModel('Billet');
		$conditions = array('published'=>1);
		$d['billets'] = $this->Billet->find(array(
				'conditions'=>$conditions, 
				'limit'=>'4' ));
		
		$this->set($d);
	
	}
	function liste(){
		$perPage = 4;
		$this->loadModel('Billet');
		$conditions = array('published'=>1);
		$d['billets'] = $this->Billet->find(array(
				'conditions'=>$conditions,
				'limit'=>($perPage *($this->request->page - 1)).','.$perPage ));
		$d['total'] = $this->Billet->findCount($conditions);
		$d['page'] = ceil($d['total']/$perPage);
		$this->set($d);
	
	}
	
	
	public function view($id, $slug=null){
		
		$this->loadModel('Billet');
		$this->loadModel('Comment');
		$this->Billet->Form = 'Billet';
		$d['billets'] = $this->Billet->findFirst(array(
				"fields"=>'id,title,content, slug,date',
				"conditions"=> array('id'=>$id, 'published'=>'1')));
		if (empty($d['billets'])) {
			$this->e404('Page introuvable');
		}
	//	$this->request->data->idbillet = $id ;
		
		$d['comments']=$this->Comment->find(array(
				"fields"=>'id,author, content, DATEDIFF(now(), date) as nbreJours,
				 signaled, idbillet, seen, date',
				"conditions"=> array('idbillet'=>$id),
				"orderby" => 'date ASC'
		));
		
		$this->set( $d);
	}
	
	function addComment(){
		
		if ($this->request->data) {
				$this->loadModel('Comment');
				
			if ($this->Comment->validates($this->request->data)) {
				//on insere le publish
				if (!isset($this->request->data->signaled)){
					$this->request->data->signaled = false;
				}
				$this->request->data->date = date('Y-m-d H:i:s');
		
				$this->Comment->save($this->request->data);
				$this->redirect('billets/view/'.$this->request->data->idbillet);
				$this->session->setFlash('op&eacute;ration effectu&eacute; avec succes');
				
				
				//debug($this->request->data);
			}else {
				if (isset($this->Comment->errors)) {
					$error = array();
					foreach ($this->Comment->errors as $k => $v) {
						$this->session->setFlash($v, 'warning');
						$error[$k]= ' alert-warning';
						// $message[$k] ="<span class=' alert-danger'>$v</span>";
						$message[$k] ="<span class='help-block text-danger'>$v</span>";
					}
					$d['error'] = $error;
					$d['message'] = $message;
				}
				$this->session->setFlash('Merci de corriger les informations', 'danger');
			}
		
		}
		else {
			
				return false;
			
		}
		
	}
	
	
	function admin_index(){
		$perPage = 110;

		$this->loadModel('Billet');
		$conditions = array('1'=>1);
		$d['billets'] = $this->Billet->find(array(
				'conditions'=>$conditions,
				'limit'=>($perPage *($this->request->page - 1)).','.$perPage ));
		$d['total'] = $this->Billet->findCount($conditions);
		$d['page'] = ceil($d['total']/$perPage);

$this->set($d);
	$this->render('admin_index.php');

}
	
	function admin_delete($id) {
	 $this->loadModel('Billet')	;
	 $this->Billet->delete($id);

	$this->session->setFlash('le contenu supprim&eacute; avec succes');
	 $this->redirect('admin/billets/index');
	 
	}
	
	function admin_edit($id =null) {
		$this->loadModel('Billet')	;

	//isset($this->request->data)? debug($this->request->data): 'ras';
		if ($this->request->data) {
			
			
			if ($this->Billet->validates($this->request->data)) {
				//on insere le publish
				
				if (!isset($this->request->data->published)){
					$this->request->data->published = 0;
				} else {
					$this->request->data->published = 1;
				}
				$this->request->data->date = date('Y-m-d H:m:i');
				$this->request->data->content = $this->deletehtml($this->request->data->content);
				
				//debug($this->request->data)
				$this->Billet->save($this->request->data);
				$this->session->setFlash('op&eacute;ration effectu&eacute; avec succes');
				/*;
				die();*/

			 	$this->redirect('admin/billets/index');
				$d['id'] = $this->Billet->id;
				//debug($this->request->data);
			}else {
				if (isset($this->Billet->errors)) {
					$error = array();
					foreach ($this->Billet->errors as $k => $v) {
						$this->session->setFlash($v, 'warning');
						$error[$k]= ' alert-warning';
						// $message[$k] ="<span class=' alert-danger'>$v</span>";
						$message[$k] ="<span class='help-block text-danger'>$v</span>";
					}
					$d['error'] = $error;
					$d['message'] = $message;
				}
				$this->session->setFlash('Merci de corriger les informations', 'danger');
			}
	
		}else {
				$this->request->data  = $this->Billet->findFirst(array(
				"fields"=>'id,title,content, slug,date, published',
				"conditions"=> array('id'=>$id)));
				$d['id']=$id;
			
		}
		
		
		$this->set($d);
	
	}
	
	function deletehtml($param) {
		$html = array('<!DOCTYPE html>','<html>','<head>','</head>','<body>', '</body>','</html>');
		
		foreach ($html as $value) {
		$param=	str_replace($value, '', $param);
		}
		
		return trim($param);
	}
	
	function signaled($id, $idbillet){
		
		if (isset($id)) {
			$this->loadModel('Comment')	;
			$this->Comment->db->query('UPDATE comments SET signaled = 1 WHERE id='.$id);
			
			$this->session->setFlash('Commentaire signal&eacute; avec succes');
			$this->redirect('billets/view/'.$idbillet);
		}
		
	}
	
}