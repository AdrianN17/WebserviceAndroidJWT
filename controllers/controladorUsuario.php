<?php

require_once "../models/usuario.php";
require_once "../database/conexion.php";

class controladorUsuario{

    private $db;
    private $con;
		
    function __construct() {
        $this->db = new conexion();
        $this->con = $this->db->getConnection();
    }

    public function login($data)
    {
        
        $query = "CALL login(?,?)";

        $stmt = $this->con->prepare($query);
        $stmt->bindParam(1, $data->user);
        $stmt->bindParam(2, $data->pass);

        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_CLASS, "usuario");

        return $row;
    }
}

?>