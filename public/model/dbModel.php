<?php
class dbModel
{
	private $db;	
	public function dbModel()
	{
		require_once '../config/mysql.config.php';
		$this->db = new mysqli($mysql["host"], $mysql["user"], $mysql["pass"], $mysql["db"]);
	}
	public function getStatment($statment = NULL)
	{
		$stmt = $this->db->stmt_init();
		if($stmt!=NULL)
		{
			$stmt->prepare($statment);
		}
		return $stmt;
	}
}
?>