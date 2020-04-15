<?php

class errorAlerta
{
    public static function tokenExpirado()
    {
        $alerta = array("Codigo" => 1, "Mensaje" => "El tiempo de envio se ha superado");
    }

    public static function tokenNulo()
    {
        $alerta = array("Codigo" => 2, "Mensaje" => "No se ha recibido el identificador");
    }

    public static function accesoDenegado()
    {
        $alerta = array("Codigo" => 0, "Mensaje" => "Error peticion no valida");

        return json_encode($alerta) ;
    }

    public static function noDatos()
    {
        $alerta = array("Codigo" => 3, "Mensaje" => "No se encontro registro");

        return json_encode($alerta) ;
    }
}

?>