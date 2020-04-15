<?php

include_once "../error/errorAlerta.php";
include_once "../controllers/controladorUsuario.php";
include_once "../jwtFunciones/jwtFunciones.php";

if(!empty($_POST)){
    if(isset($_POST["Authorization"]))
    {
        $auth = $_POST["Authorization"];

        $resultado = NULL;
        
        try
        {
            $resultado = jwtFunciones::extraerJwt($auth);

            $cUsuario = new controladorUsuario();

            $resultado2 = $cUsuario->login($resultado);

            if(!empty($resultado2))
            {
                $iat = new DateTime("now");

                $exp = new DateTime("now");
                $exp->modify('+5 minutes');

                $nbf = new DateTime("now");
                $nbf->modify('-1 minutes');

                $resultado3 = jwtFunciones::crearJwt($resultado2,"RE:Login",$iat,$nbf,$exp);
                
                $resultado4 = array("Authorization" => $resultado3);
                print_r(json_encode($resultado4));

            }
            else
            {
                print_r(errorAlerta::noDatos());
            }

        }
        catch(\Firebase\JWT\ExpiredException $e)
        {
            print_r(errorAlerta::tokenExpirado());
        }
    }
    else
    {
        print_r(errorAlerta::tokenNulo());
    }
}
else
{
    print_r(errorAlerta::accesoDenegado());
}

?>