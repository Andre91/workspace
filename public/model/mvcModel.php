<?php
class mvcModel {
	public function load($controller, $action) {
		$handle = opendir("helper/");
		while ($datei = readdir($handle)) {
			if (substr($datei, 0, 1) != ".") {
				require_once "helper/" . $datei;
				$n = substr($datei, 0, -4);
				$$n = new $n();
			}
		}
		require_once 'controller/' . $controller . "Controller.php";
		$name = $controller . "Controller";
		$c = new $name();
		$name = $action . "Action";
		$data = $c -> $name();
		unset($name);
		unset($c);
		require_once 'view/html/' . $controller . "/" . $action . ".php";
		if (file_exists('view/js/' . $controller . "/" . $action . ".js.php")) {
			require_once 'view/js/' . $controller . "/" . $action . ".js.php";
		}
	}

}
?>
