<?php
class dbModel
{
	private $db;	
	public function dbModel()
	{
		require_once '../config/mysql.config.php';
		//$this->db = new mysqli($mysql["host"], $mysql["user"], $mysql["pass"], $mysql["db"]);
		$this->db = new PDO("mysql:host=".$mysql['host'].";dbname=".$mysql['db'], $mysql["user"], $mysql["pass"]); 
	}
	public function insert($statment, $data)
	{
		try { 
		$STH = $this->db->prepare($statment); 
		/*foreach($data as $nummer => $param)
		{
			$STH->bindParam($nummer+1, $param);  
		}
		 * 
		 */
		var_dump($data);
		echo "<br>";
		var_dump($statment);
		echo "<br>";
		$STH->execute($data);
		echo "AUSGEFÜHRT";
		$STH->CloseCursor();
		}
		catch(PDOException $e) {  
 		  echo "I'm sorry, Dave. I'm afraid I can't do that.";  
   		 echo "<hr>".$e->getMessage()."</hr>"; 
			}  
	}
	public function select($statment, $data)
	{
		$STH = $this->db->query($statment); 
		foreach($data as $nummer->$param)
		{
			$STH->bindParam($nummer, $param);  
		}
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$re = array();
		while($row = $STH->fetch()) {
			$re[] = $row;   
		}    
		return $re;
	}
}
?>