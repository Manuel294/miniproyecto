<?php

include_once("modelos/rol.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorRoles{

    public function inicio(){

        $roles=Rol::consultar();

        include_once("vistas/roles/inicio.php");

    }

    public function crear(){
        
        if($_POST){

            $rol=$_POST['rol'];

            Rol::crear($rol);

            header("Location:./?controlador=roles&accion=inicio");
        }

        include_once("vistas/roles/crear.php");
    }

    public function borrar(){

        $id_rol=$_GET['id_rol'];

        Rol::borrar($id_rol);

        header("Location:./?controlador=roles&accion=inicio");


    }

    public function editar(){

        if($_POST){


            $id_rol=$_POST['id_rol'];
            $rol=$_POST['rol'];

            Rol::editar($id_rol, $rol);

            header("Location:./?controlador=roles&accion=inicio");

            
        }

        $id_rol=$_GET['id_rol'];

        $rol=( Rol::buscar($id_rol));


        include_once("vistas/roles/editar.php");
    }

}
?>