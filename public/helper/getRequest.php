<?php
class getRequest
{
	public function getParam($name, $value=NULL)
	{
		if(isset($_GET[$name]))
		{
			$value=$_GET[$name];
		}
		if(isset($_POST[$name]))
		{
			$value = $_POST[$name];
		}
		return $value;
		
	}
}
?>
