<?php
session_start();

class Database{
	
	private $host  = 'msdocs-laravel-mysql-crsgourmet-server.postgres.database.azure.com';
    private $user  = 'rqxthxowkx';
    private $password   = "485Y367VUF761R13$";
    private $database  = "postgres"; 
    
    public function getConexao(){		
		$con = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($con->connect_error){
			die("Erro ao conectar ao MySQL: " . $con->connect_error);
		} else {
			return $con;
		}
    }
}
?>
