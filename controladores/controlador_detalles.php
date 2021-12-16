<?php 

include_once("modelos/detalle.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorDetalles{

    public function inicio(){

        $detalles=Detalle::consultar();

        include_once("vistas/detalles/inicio.php");

    }


    public function crear(){

        if($_POST){

            $alto=$_POST['alto'];
            $ancho=$_POST['ancho'];
            $cantidad=$_POST['cantidad'];
            $id_producto_fk=$_POST['id_producto_fk'];
            $observacion=$_POST['observacion'];
            $precio_detalle=$_POST['precio_detalle'];
            $profundidad=$_POST['profundidad'];

            Detalle::crear($alto, $ancho, $cantidad, 
            $id_producto_fk, $observacion, $precio_detalle, $profundidad);

            header("Location:./?controlador=detalles&accion=inicio");
        }

        include_once("vistas/detalles/crear.php");
    }


    public function borrar(){

        $id_detalle=$_GET['id_detalle'];

        Detalle::borrar($id_detalle);

        header("Location:./?controlador=detalles&accion=inicio");

    }

    public function editar(){

        if($_POST){

            $id_detalle=$_POST['id_detalle'];
            $alto=$_POST['alto'];
            $ancho=$_POST['ancho'];
            $cantidad=$_POST['cantidad'];
            $observacion=$_POST=['observacion'];
            $precio_detalle=$_POST['precio_detalle'];
            $profundidad=$_POST['profundidad'];

            Detalle::editar($id_detalle, $alto, $ancho, $cantidad, $observacion, $precio_detalle, $profundidad);
        }
        $id_detalle=$_GET['id_detalle'];

        $detalle=(Detalle::buscar($id_detalle));

        include_once("vistas/detalles/editar.php");
    }

}
?>