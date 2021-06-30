<?php
class MyDB{
	private $username = "root";
	private $password = "";
	private $database = "workbook";
	private $host = "localhost";
	private $connection;
	
	public function __construct(){
		$dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8";
		$this->connection = new PDO($dsn, $this->username, $this->password);
		$this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	
	public function executeQuery($sql){
		return $this->connection->query($sql);
	}
}
?>





