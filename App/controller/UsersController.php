<?php

class UsersController extends Controller {
	
	/**
	 * 
	 * login
	 */
	function login() {
		$this->loadModel('user');

		if ($this->request->data) {
			$data =  $this->request->data;
			
			$data->password = sha1($data->password);
			
			$res = $this->user->findFirst(array(
				"fields"=>'id, login, password',
				"conditions"=> array('login'=>$data->login, 'password'=>$data->password)));
			
			if (!empty($res)) {
				$this->session->set('User', $res);
				//$this->redirect('admin/billets');
				$this->session->setFlash('Bienvenu '.$this->session->read('User')->login, 'success');
						$this->redirect('admin/billets/index');									
			}else {
				$this->request->data->password = '';
				$this->session->setFlash('donnees incorrect ', 'danger');
				
			}
			
		}
		
		if ($this->session->isLogged()) {
			$this->redirect('admin/billets/index');
		}
		
	}
	

	/**
	 *
	 * logout
	 */
	function logout() {
	
		unset($_SESSION['User']);
		$this->session->setFlash('Vous êtes maintenant deconnecté');
		$this->redirect('billets/index');
	}
	
	
}