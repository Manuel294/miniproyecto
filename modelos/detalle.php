<?php


class Detalle{

    public $id_detalle;
    public $alto;
    public $ancho;
    public $cantidad;
    public $observacion;
    public $precio_detalle;
    public $profundidad;

    public function __construct($id_detalle, $alto, $ancho, $cantidad, 
     $observacion, $precio_detalle, $profundidad )
    {
        $this->id_detalle=$id_detalle;
        $this->alto=$alto;
        $this->ancho=$ancho;
        $this->cantidad=$cantidad;
        $this->observacion=$observacion;
        $this->precio_detalle=$precio_detalle;
        $this->profundidad=$profundidad;
    }

    public static function consultar(){
        $listaDetalle=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM detalleproyecto");

        foreach($sql->fetchALL() as $detalle){
            $listaDetalle[]= new Detalle($detalle['id_detalle'], $detalle['alto'], 
            $detalle['ancho'], $detalle['cantidad'], $detalle['id_producto_fk'], 
            $detalle['observacion'], $detalle['precio_detalle'], $detalle['profundidad']);
        }

        return $listaDetalle;
    }


    public static function crear($alto, $ancho, $cantidad, 
     $observacion, $precio_detalle, $profundidad ){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("INSERT INTO detalleproyecto(alto, ancho, cantidad, 
         observacion, precio_detalle, profundidad) VALUES (?,?,?,?,?,?)");

        $sql -> execute(array($alto, $ancho, $cantidad, $observacion, $precio_detalle, $profundidad));
    }


    public static function borrar($id_detalle){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("DELETE FROM detalleproyecto WHERE id_detalle=?");

        $sql -> execute(array($id_detalle));
    }
    

    public static function buscar($id_detalle){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("SELECT * FROM detalleproyecto WHERE id_detalle=?");

        $sql -> execute(array($id_detalle));

        $detalle=$sql->fetch();

        return new Detalle($detalle['id_detalle'], $detalle['alto'], 
        $detalle['ancho'], $detalle['cantidad'], $detalle['observacion'], $detalle['precio_detalle'], $detalle['profundidad']);
    }


    public static function editar($id_detalle, $alto, $ancho, $cantidad, $observacion, $precio_detalle, $profundidad){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("UPDATE detalleproyecto SET alto=?, 
        ancho=?, cantidad=?, observacion=?, precio_detalle=?, 
        profundidad=? WHERE id_detalle=?");

        $sql -> execute(array($alto, $ancho, $cantidad, $observacion, $precio_detalle, $profundidad, $id_detalle));
    }

}


?>