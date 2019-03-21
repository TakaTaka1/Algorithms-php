<?php
class Router
{
	protected $routes;
	public function __construct($str)
	{
		$this->routes = $this->matched($str);
		// print_r($this->routes);
	}

	public function matched ($str) 
	{	
		$routes = [];
		foreach($str as $url => $param){
			$tokens = explode('/', ltrim($url, '/'));
			foreach($tokens as $i => $token){
				if(0 === strpos($token, ':')){
					$name = substr($token, 1);
					$token = '(?P<' . $name .'>[^/]+)';
				}
				$tokens[$i] = $token;
			}
			$pattern = '/' .implode('/', $tokens);

			$routes[$pattern] = $param;

		}
		return $routes;
	}

	public function solve($pathInfo)
	{
		if('/' !== substr($pathInfo, 0,1)){
			$pathInfo = '/' .$pathInfo;
		}
		foreach($this->routes as $pattern => $params) {
			if(preg_match('#^'. $pattern . '$#', $pathInfo, $matches)){
				$params = array_merge($params, $matches);

				return $params;
			}
		}
		return false;
	}

}	
$arr =['/user/edit/:id'=>['controller'=>'userPages', 'action' => 'index']];
$test = new Router($arr);
$route = $test->solve('user/edit/1');
print_r($route);
// print_r($test);

?>