<?php
define("APPLICATION_PFAD", ".", true);
define("DATA_PFAD", "../data", true);
define("LOGIN_STATUS", false, true);
$controller = $_GET["controller"];
$action = "index";
if(isset($_GET["action"])&&$_GET["action"]!="")
{
$action = $_GET["action"];
}

//Load Moddels
$handle=opendir("model/");
while ($datei = readdir ($handle)) {
 if(substr($datei, 0, 1)!=".")
 {
 	require_once "model/".$datei;
 }
}
//Loding Helper

closedir($handle);
$mvc = new mvcModel();
$mvc->load("template", "top");
$mvc->load($controller, $action);
$mvc->load("template", "bottom");
?>