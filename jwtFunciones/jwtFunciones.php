<?php

require_once '../config/jwt.php';
require_once "../vendor/autoload.php";

use Firebase\JWT\JWT;



class jwtFunciones 
{

    public static function extraerJwt($jwt,$key = DEFAULT_KEY)
    {
        $decode = JWT::decode($jwt, $key, array('HS256'));

        return $decode;
    }

    public static function crearJwt($data,$audiencia,$iat,$nbf,$exp,$key = DEFAULT_KEY)
    {
        $payload = array(
            "aud" => $audiencia,
            "iat" => $iat->getTimestamp(),
            "nbf" => $nbf->getTimestamp(),
            "exp" => $exp->getTimestamp(),
            "message" => $data
        );

        $encode = JWT::encode($payload, $key);

        return $encode;
    }
}

?>