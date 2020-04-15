<?php
	require_once '../config/database.php';
	
	class conexion {
		
		
		public function getConnection()
		{
			$this->conn = null;
 
            try
            {
	            $this->conn = new PDO("mysql:host=" . hostname . ";dbname=" . database, user, password);
	            $this->conn->exec("set names utf8");
            }
            catch(PDOException $exception){
	            echo "Connection error: " . $exception->getMessage();
	        }
	 
            return $this->conn;
        }
	}
?>