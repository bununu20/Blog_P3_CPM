<?php

class Conf {
	static $debug =1 ;
	static $database = array(
'default'=> array('host' =>'mysql376.sql002:3306',
		'database' => 'villedenxx1',
		'login'=> 'villedenxx1',
		'password' => 'Onasinclaire20')
);

	
}
Router::prefix('bunker', 'admin');
Router::connect('billet/:slug-:id','billets/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('Billet/:action', 'posts/:action');