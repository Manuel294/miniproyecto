<?php

include_once("modelos/producto.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorProductos{

    public function inicio(){

        $productos=Producto::consultar();

        include_once("vistas/productos/inicio.php");

    }


    public function crear(){

        if($_POST){

            $nombre_producto=$_POST['nombre_producto'];
            $tipo_producto=$_POST['tipo_producto'];

            Producto::crear($nombre_producto, $tipo_producto);

            header("Location:./?controlador=productos&accion=inicio");
        }

        include_once("vistas/productos/crear.php");
    }


    public function borrar(){

        $id_producto=$_GET['id_producto'];

        Producto::borrar($id_producto);
        
        header("Location:./?controlador=productos&accion=inicio");

    }

    public function editar(){

        if($_POST){

            $id_producto=$_POST['id_producto'];
            $nombre_producto=$_POST['nombre_producto'];
            $tipo_producto=$_POST['tipo_producto'];

            Producto::editar($id_producto, $nombre_producto, $tipo_producto);

            header("Location:./?controlador=productos&accion=inicio");
        }

        $id_producto=$_GET['id_producto'];

        $producto=(Producto::buscar($id_producto));

        include_once("vistas/productos/editar.php");
    }

}

?>