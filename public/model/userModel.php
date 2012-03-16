<?php
class userModel
{
	private $db;
	public function userModel()
	{
		$this->db = new dbModel();
	}
	public function register($mail, $pw)
	{
		$res = $this->db->insert('INSERT INTO `user` (`id`, `mail`, `pw`) VALUES (NULL, ?, ?)', array($mail, hash("sha512", $pw)));
		//$id = $this->login($mail, $pw);
	}
	public function login($mail, $pw)
	{
		$stmt = $this->db->getStatment("SELECT id FROM `user` WHERE `mail` = ? AND `pw` = ?");
		$stmt->bind_param('ss', $mail, hash("sha512", $pw));
		$stmt->bind_result($id);
		$stmt->execute();
		$stmt->fetch();
		$stmt->close();
		return $id;
	}
}
?>