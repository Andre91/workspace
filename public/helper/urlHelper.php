<?php
class urlHelper
{
	public function createURL($controller, $action = "")
	{
		require_once '../config/system.config.php';
		$url = $config["url"].$controller."/".$action;
		return $url;
	}
}
?>
