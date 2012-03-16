<?php
class mvcModel
{
	public function load($controller, $action)
	{
		require_once 'controller/'.$controller."Controller.php";
		$name = $controller."Controller";
		$c = new $name();
		$name = $action."Action";
		$data = $c->$name();
		unset($name);
		unset($c);
		require_once 'view/'.$controller."/".$action.".php";
	}
	
}
?>
