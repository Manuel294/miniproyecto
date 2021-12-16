<?php

class BD{

    private static $instancia=NULL;

    public static function crearInstancia(){

        if(!isset( self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=localhost;dbname=prueba','root','',$opcionesPDO);
            //self::$instancia= new PDO('mysql:host=sql207.epizy.com;dbname=epiz_30566052_prueba','epiz_30566052','QZe7IL3PcU7zCu',$opcionesPDO);
        }
        return self::$instancia;
    }
    
    
}

?>