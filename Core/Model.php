<?php

class Model {
	
	public $db ;
	public $conf = "default";
	public $table = false;
	static $connections = array();
	public $primaryKeys = 'id';
	public $id ;
	public $errors =array();
	public $Form;
	
	public function __construct(){
		// initialisation de quelques variable
		if ($this->table === false) {
			$this->table = strtolower(get_class($this)).'s';
		}
		// je me connecte
		$conf = Conf::$database[$this->conf];
	if (isset(Model::$connections[$this->conf])){ 
		$this->db = Model::$connections[$this->conf];
		return true;
	}
	try {
		$pdo = new PDO("mysql:host=".$conf['host']."; dbname=".$conf['database'].";", $conf['login'], $conf['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		Model::$connections[$this->conf] =$pdo ; 
		$this->db = $pdo ;
	} catch (PDOException $e) {
		if (Conf::$debug>=1) {
			die($e->getMessage());
		}
		else {
			die('Impossible de se connecter à la base de données');
		}
		
	}
		
	}
	public function find($req){
		$sql = "SELECT "; 
		if (isset($req['fields'])){
			if (is_array($req['fields'])) {
				$sql .= implode(", ", $req['fields']);
			}else {
				$sql .= $req['fields'];
			}
			
		}else {
			$sql .= " * ";	
			}
			
			$sql .= " FROM ".$this->table." as ".get_class($this)." ";
			
		
		if (isset($req['conditions'])) {
			$sql .= "  WHERE ";
			if(!is_array($req['conditions'])){
				$sql .= $req['conditions'];
			}else {
				$cond = array();
				foreach ($req['conditions'] as $k=>$v){
					if (!is_numeric($v)) {
						$v = $this->db->quote($v);
					}
					$cond[] = "$k = $v"; 
				}
				$sql .= implode(' AND ',$cond);
			}
		}
		
		if (isset($req['orderby'])) {
			$sql .= "  ORDER BY  ".$req['orderby'];
		}
		
		if (isset($req['limit'])) {
			$sql .= "  LIMIT ".$req['limit'];
						}
		
		/*var_dump($sql);
		die($sql);*/
		$pre = $this->db->prepare($sql);
		$pre->execute();
		return $pre->fetchall(PDO::FETCH_OBJ);
	}
	
	public function findFirst($req){
		return current($this->find($req));
	}
	
	public function findCount($conditions){
	 $res = $this->findFirst(array(
				'fields'=>'COUNT('.$this->primaryKeys.') as count ',
				'conditions'=>$conditions
		));
		return $res->count;
	}
	
	
	function delete($id) {
		$req = "DELETE FROM {$this->table} WHERE {$this->primaryKeys} = $id";
		
		$this->db->query($req);
		
	}
	
	function save($data) {
		$key = $this->primaryKeys;
		$fields = array();
		$d = array();
	//	debug($data);
		if (empty($data->$key)) {
			//var_dump($data->$key);
			unset($data->$key);
		}
		foreach ($data as $k => $v) {
			$fields[] = "$k =:$k";
			$d[":$k"] = $v;
		}
		
		if (isset($data->$key)&& !empty($data->$key)) {
			$sql ='UPDATE '.$this->table.' SET '.implode(",", $fields).' WHERE '.$key.'=:'.$key;
			$this->id = $data->$key;
			$action = 'update';
		} else {
			$sql ='INSERT INTO '.$this->table.' SET '.implode(",", $fields);
			$action = 'insert';
		}


		
		$pre = $this->db->prepare($sql);
/*var_dump($sql);

die();	*/	
$pre->execute($d);
		//
		/*debug($sql);
		die();*/
		if ($action=='insert') {
			$this->id = $this->db->lastInsertId();
		}
		return $this->id;
	}
	
}