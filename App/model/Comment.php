<?php


class Comment extends Model {
	
	var $validate = array(
			'author'=> array(
				'rule'=>	'notEmpty',
				'message'=>'Vous devez entrer le nom de l\'auteur du commentaire'	
			),
			'content'=> array(
					'rule'=>	'notEmpty',
					'message'=>'Le commentaire ne peut &ecirc;tre vide !!!'
			)
		);
	
	function validates($data) {
		$errors =array();
		//debug($data);
		foreach ($this->validate as $k => $v) {
			if (!isset($data->$k)) {
				$errors[$k] = $v['message'];
			}else {
				if ($v['rule']=='notEmpty') {
					if (empty($data->$k)) {
				
					$errors[$k]= $v['message'];}
				}elseif (!preg_match('/^'.$v['rule'].'$/', $data->$k)){
					$errors[$k]= $v['message'];
				}
			}
		}
		$this->errors = $errors;
		if (isset($this->Form)) {
			$this->$Form->errors = $errors;
		}
		
		if (empty($errors)) {
		return true	;
		}else {
			return false;
		}
		
	}
}