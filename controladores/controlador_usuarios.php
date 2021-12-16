<?php

include_once("modelos/usuario.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorUsuarios{

    public function inicio(){

        $usuarios=Usuario::consultar();

        include_once("vistas/usuarios/inicio.php");

    }
    public function crear(){

        if($_POST){

            $apellido_usuario=$_POST['apellido_usuario'];
            $nombre_usuario=$_POST['nombre_usuario'];
            $num_doc_usuario=$_POST['num_doc_usuario'];
            $password=$_POST['password'];
            $telefono_usuario=$_POST['telefono_usuario'];
            $tipo_doc_usuario=$_POST['tipo_doc_usuario'];
            
            Usuario::crear($apellido_usuario, $nombre_usuario, 
            $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario);

            header("Location:./?controlador=usuarios&accion=inicio");

 
        }
        include_once("vistas/usuarios/crear.php");
        
    }
    public function editar(){

        if($_POST){
            
            $id_usuario=$_POST['id_usuario'];
            $apellido_usuario=$_POST['apellido_usuario'];
            $nombre_usuario=$_POST['nombre_usuario'];
            $num_doc_usuario=$_POST['num_doc_usuario'];
            $password=$_POST['password'];
            $telefono_usuario=$_POST['telefono_usuario'];
            $tipo_doc_usuario=$_POST['tipo_doc_usuario'];

            Usuario::editar($id_usuario, $apellido_usuario, $nombre_usuario, 
            $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario);

            header("Location:./?controlador=usuarios&accion=inicio");

        }

        $id_usuario=$_GET['id_usuario'];

        $usuario=( Usuario::buscar($id_usuario));


        include_once("vistas/usuarios/editar.php");
        
    }
    public function borrar(){

        $id_usuario=$_GET['id_usuario'];
        
        Usuario::borrar($id_usuario);

        header("Location:./?controlador=usuarios&accion=inicio");

        
    }
}

?>