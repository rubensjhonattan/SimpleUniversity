<?php

class Connection{
	private $connection;
	private $dsn, $user, $pass;

	function __construct(){
		$this->dsn='mysql:host=localhost;dbname=universidade';
		$this->user='root';
		$this->pass='';
		$this->connect();		
	}

	function connect(){
		try {
			$this->connection = new PDO($this->dsn, $this->user, $this->pass);	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $this->connection;
	}
}