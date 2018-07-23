<?php


class Billet extends Model {
	
	var $validate = array(
			'title'=> array(
				'rule'=>	'notEmpty',
				'message'=>'Vous devez pr&eacute;ciser un titre'	
			),
			'slug'=> array(
				'rule'=>'([a-z0-9\-]+)',
				'message'=>"l'URL n'est pas valide : lettre et tiret uniquement"
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