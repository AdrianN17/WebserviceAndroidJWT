<?php

class usuario implements JsonSerializable
{
    public $id;
    public $user;
    public $pass;
    public $nombre;
    public $apellido;

    public function __construct() {

    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'user' => $this->user,
            'pass' => $this->pass,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ];
    }  
}

?>