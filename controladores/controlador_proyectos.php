<?php


include_once("modelos/proyecto.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorProyectos{

    public function inicio(){

        $proyectos=Proyecto::consultar();

        include_once("vistas/proyectos/inicio.php");

    }


    public function crear(){

        if($_POST){

            $estado_proyecto=$_POST['estado_proyecto'];
            $fecha_finalizacion=$_POST['fecha_finalizacion'];
            $fecha_inicio=$_POST['fecha_inicio'];
            $tipo_proyecto=$_POST['tipo_proyecto'];
            $valor_proyecto=$_POST['valor_proyecto'];

            Proyecto::crear($estado_proyecto, $fecha_finalizacion, $fecha_inicio,
            $tipo_proyecto, $valor_proyecto);

            header("Location:./?controlador=proyectos&accion=inicio");
        }

        include_once("vistas/proyectos/crear.php");
        
    }


    public function borrar(){

        $id_proyecto=$_GET['id_proyecto'];

        Proyecto::borrar($id_proyecto);

        header("Location:./?controlador=proyectos&accion=inicio");

    }


    public function editar(){

        if($_POST){
 
            $id_proyecto=$_POST['id_proyecto'];
            $estado_proyecto=$_POST['estado_proyecto'];
            $fecha_finalizacion=$_POST['fecha_finalizacion'];
            $fecha_inicio=$_POST['fecha_inicio'];
            $tipo_proyecto=$_POST['tipo_proyecto'];
            $valor_proyecto=$_POST['valor_proyecto'];

            Proyecto::editar($id_proyecto, $estado_proyecto, $fecha_finalizacion, $fecha_inicio,
            $tipo_proyecto, $valor_proyecto);

            header("Location:./?controlador=proyectos&accion=inicio");
        }

        $id_proyecto=$_GET['id_proyecto'];

        $proyecto=( Proyecto::buscar($id_proyecto));

        include_once("vistas/proyectos/editar.php");
    }

}
?>