<?php
class publicController
{
	public function indexAction()
	{
		//Login
		$username= $getRequest->getParam("mail");
		$pw= $getRequest->getParam("password");
		if($username!=NULL&&$pw!=NULL)
		{
			$userModel = new userModel();
			$userModel->login($username, $pw);
		}
	}
	public function testAction()
	{
		$userModel = new userModel();
		$userModel->register("soeren", "geheim");
	}
}
?>
