<?php

class Proyecto{

    public $id_proyecto;
    public $id_detalle_proyecto_fk;
    public $id_usuario_fk;
    public $estado_proyecto;
    public $fecha_finalizacion;
    public $fecha_inicio;
    public $tipo_proyecto;
    public $valor_proyecto;

    public function __construct($id_proyecto, $id_detalle_proyecto_fk, $id_usuario_fk, 
    $estado_proyecto, $fecha_finalizacion, $fecha_inicio, $tipo_proyecto, $valor_proyecto)
    {
        $this->id_proyecto=$id_proyecto;
        $this->id_detalle_proyecto_fk=$id_detalle_proyecto_fk;
        $this->id_usuario_fk=$id_usuario_fk;
        $this->estado_proyecto=$estado_proyecto;
        $this->fecha_finalizacion=$fecha_finalizacion;
        $this->fecha_inicio=$fecha_inicio;
        $this->tipo_proyecto=$tipo_proyecto;
        $this->valor_proyecto=$valor_proyecto;
    }


    public static function consultar(){
        $listaProyecto=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM proyecto");

        foreach($sql->fetchALL() as $proyecto){
            $listaProyecto[]= new Proyecto($proyecto['id_proyecto'], $proyecto['id_detalle_proyecto_fk'], 
            $proyecto['id_usuario_fk'], $proyecto['estado_proyecto'], $proyecto['fecha_finalizacion'],
            $proyecto['fecha_inicio'], $proyecto['tipo_proyecto'], $proyecto['valor_proyecto']);
        }

        return $listaProyecto;
    }


    public static function crear($estado_proyecto, $fecha_finalizacion, $fecha_inicio,
     $tipo_proyecto, $valor_proyecto){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("INSERT INTO proyecto(estado_proyecto, fecha_finalizacion, fecha_inicio,
         tipo_proyecto, valor_proyecto) VALUES (?,?,?,?,?)");

        $sql -> execute(array($estado_proyecto, $fecha_finalizacion, $fecha_inicio, $tipo_proyecto, $valor_proyecto));
    }


    public static function borrar($id_proyecto){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("DELETE FROM proyecto WHERE id_proyecto=?");

        $sql -> execute(array($id_proyecto));
    }


    public static function buscar($id_proyecto){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("SELECT * FROM proyecto WHERE id_proyecto=?");
        
        $sql -> execute(array($id_proyecto));

        $proyecto=$sql->fetch();

        return new Proyecto($proyecto['id_proyecto'], $proyecto['id_detalle_proyecto_fk'], 
        $proyecto['id_usuario_fk'], $proyecto['estado_proyecto'], $proyecto['fecha_finalizacion'],
        $proyecto['fecha_inicio'], $proyecto['tipo_proyecto'], $proyecto['valor_proyecto']);
    }


    public static function editar($id_proyecto, $estado_proyecto, $fecha_finalizacion, $fecha_inicio,
    $tipo_proyecto, $valor_proyecto){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("UPDATE proyecto SET estado_proyecto=?, fecha_finalizacion=?, fecha_inicio=?,
        tipo_proyecto=?, valor_proyecto=? WHERE id_proyecto=?");

        $sql -> execute(array( $estado_proyecto, $fecha_finalizacion, $fecha_inicio,
        $tipo_proyecto, $valor_proyecto, $id_proyecto));
    }
}

?>