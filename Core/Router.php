<?php

class Router {
	
	static $routes = array();
	static $prefixes = array();
	
	static  function prefix($url, $prefix){
		self::$prefixes[$url]=$prefix;
	}
	
	/**
	 * permet de parser une url
	 * @param $url à parser
	 * @return retourne un tableau avec les paramètres de l'url
	 */
	static function parse($url, $request){
		$get = explode("?", $url);
		if (isset($get[1])) {
			$url=$get[0];
			$request->getparams = $get[1];
		} 
		
		
		$url = trim($url, "/");
		
		if (empty($url)) {
			//$url = Router::$routes[0]['url'];
                         $url ='billets';
                       // var_dump($url);
		}else {
//var_dump(Router::$routes);
			/*foreach (Router::$routes as $v) {
				if (preg_match($v['catcher'], $url, $match)) {
					$request->controller = $v['controller'];
					$request->action = isset($match['action'])? $match['action'] : $v['action'];
					$request->params = array();
					foreach ($v['params'] as $k => $v) {
						$request->params[$k] = $match[$k] ;
					}
					if (!empty($match['args'])) {
						$request->params += explode('/', trim($match['args'],'/')) ;
					}
					return $request;	
				}
			}*/
		}
		
//var_dump($url);
$params = explode("/", $url);
		// vérification du préfix

//var_dump($params);
if (isset($params[0])) {
			if (in_array($params[0],array_keys(self::$prefixes))) {
			$request->prefix = self::$prefixes[$params[0]];
			array_shift($params);
			}
		}
		//var_dump($request);
		/*var_dump($params);
/*die();*/
		if (isset($params[0])) {
			 $request->accueil =  $params[0] ;
		}
		
		$request->controller = isset($params[0]) ? $params[0] : 'billets';
		$request->action = isset($params[1]) ? $params[1] : 'index';

/*var_dump($request);
die();*/	foreach (self::$prefixes as $k => $v) {
			if (strpos($request->action, $v.'_')===0) {
				$request->prefix = $v;
				$request->action = str_replace($v.'_', '', $request->action);
//debug($request);
			}
		}

		$request->params = 	array_slice($params,2);
//var_dump($this->request);		

		return TRUE; 
		}
		/**
		 * connection
		 * @param unknown $redir
		 * @param unknown $url
		 */
		static function connect($redir, $url){
			$r = array();
			
			//$r['origin'] = '/'.str_replace('/', '\/',$url).'/';
			
			$r['params'] = array();
			$r['url']= $url;
			$r['redir'] = $redir;
			
			$r['origin']= str_replace(':action', '(?P<action>([a-z0-9\-]+))', $url);
			$r['origin'] = preg_replace('/([a-z0-9]+):([^\/]+)/',
					 '${1}:(?P<${1}>${2})',$r['origin'] );
			$r['origin'] = '/^'.str_replace('/', '\/', 
					$r['origin'].'(?P<args>\/?.*)$/');
			
			$params = explode('/', $url);
			foreach ($params as $k => $v) {
				if (strpos($v, ':')) {
					$p= explode(':', $v);
					$r['params'][$p[0]]= $p[1];
				}else {
					if ($k==0) {
						$r['controller'] = $v;
					}elseif ($k==1) {
						$r['action']=$v;
					}
				}
			}
			
			$r['catcher'] = $redir;
			$r['catcher']=str_replace(':action', '(?P<action>([a-z0-9\-]+))', $r['catcher']);
			foreach ($r['params'] as $k => $v) {
				$r['catcher']= str_replace(":$k", "(?P<$k>$v)", $r['catcher']);
			}
			
			$r['catcher'] = '/^'.str_replace('/', '\/', $r['catcher']).'(?P<args>\/?.*)$/';
			self::$routes[] = $r;
			
		}
		
		/**
		 * 
		 */
		static function url($url) {
			//die(var_dump(self::$routes));
			foreach (self::$routes as $v) {
				
				if (preg_match($v['origin'], $url, $match)) {
					//debug('OKKKKK ');
			
					foreach ($match as $k=> $w) {
						if (!is_numeric($k)) {
							$v['redir']= str_replace(":$k", $w,$v['redir']);
						}
					}
					return BASE_URL.str_replace('//', '/', '/'.$v['redir']).$match['args'];
				}
			}
			
			foreach (self::$prefixes as $k =>$v) {
				if (strpos($url, $v)===0) {
					$url = str_replace($v, $k, $url);
				}
			}
			return BASE_URL.'/'.$url;
		}
		
		/**
		 * 
		 * 
		 */
		
		static function link($url) {
			//die(var_dump(self::$routes));
			trim($url, '/');
			foreach (self::$prefixes as $k =>$v) {
				if (strpos($url, $v)===0) {
					$url = str_replace($v, $k, $url);
				}
			}
 //debug($url);
			return '/'.$url;
		}
		
		static function webroot($url) {
			trim($url, '/');
			return BASE_URL.'/'.$url;
		}
}

