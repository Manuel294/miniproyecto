<?php 

class Usuario{
    
    public $id_usuario;
    public $id_rol_fk;
    public $apellido_usuario;
    public $nombre_usuario;
    public $num_doc_usuario;
    public $password;
    public $telefono_usuario;
    public $tipo_doc_usuario;

    public function __construct($id_usuario, $id_rol_fk, $apellido_usuario, $nombre_usuario, 
    $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario)
    {
        $this->id_usuario=$id_usuario;
        $this->id_rol_fk=$id_rol_fk;
        $this->apellido_usuario=$apellido_usuario;
        $this->nombre_usuario=$nombre_usuario;
        $this->num_doc_usuario=$num_doc_usuario;
        $this->password=$password;
        $this->telefono_usuario=$telefono_usuario;
        $this->tipo_doc_usuario=$tipo_doc_usuario;
        
    }

    public static function consultar(){
        $listaUsuario=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM usuario");

        foreach($sql->fetchALL() as $usuario){
            $listaUsuario[]= new Usuario($usuario['id_usuario'], $usuario['id_rol_fk'],
            $usuario['apellido_usuario'], $usuario['nombre_usuario'], $usuario['num_doc_usuario'],
            $usuario['password'], $usuario['telefono_usuario'], $usuario['tipo_doc_usuario']);
        }

        return $listaUsuario;
    }
    

    public static function crear($apellido_usuario, $nombre_usuario, 
    $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("INSERT INTO usuario(apellido_usuario, nombre_usuario, num_doc_usuario, 
        password, telefono_usuario, tipo_doc_usuario) VALUES(?,?,?,?,?,?)");
        
        $sql -> execute(array($apellido_usuario, $nombre_usuario, 
        $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario));

    }

    public static function borrar($id_usuario){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("DELETE FROM usuario WHERE id_usuario=?");
        
        $sql -> execute(array($id_usuario));
    }

    public static function buscar($id_usuario){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("SELECT * FROM usuario WHERE id_usuario=?");
        
        $sql -> execute(array($id_usuario));

        $usuario=$sql->fetch();
        
        return new Usuario($usuario['id_usuario'], $usuario['id_rol_fk'],
        $usuario['apellido_usuario'], $usuario['nombre_usuario'], $usuario['num_doc_usuario'],
        $usuario['password'], $usuario['telefono_usuario'], $usuario['tipo_doc_usuario']);

    }

    public static function editar($id_usuario, $apellido_usuario, $nombre_usuario, 
    $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("UPDATE usuario SET apellido_usuario=?, nombre_usuario=?, num_doc_usuario=?, 
        password=?, telefono_usuario=?, tipo_doc_usuario=? WHERE id_usuario=?");
        
        $sql -> execute(array($apellido_usuario, $nombre_usuario, 
        $num_doc_usuario, $password, $telefono_usuario, $tipo_doc_usuario, $id_usuario));

    }

}

?>