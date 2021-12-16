<?php 

class Rol{

     public $id_rol;
     public $rol;

     public function __construct($id_rol, $rol){

        $this->id_rol=$id_rol;
        $this->rol=$rol;
     }

     public static function consultar(){
        $listaRol=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM rol");

        foreach($sql->fetchALL() as $roles){
            $listaRol[]= new Rol($roles['id_rol'],$roles['rol']);
        }

        return $listaRol;
     }


     public static function crear($rol){
      $conexionBD= BD::crearInstancia();

      $sql= $conexionBD ->prepare("INSERT INTO rol(rol) VALUES(?)");
      
      $sql -> execute(array($rol));
     }

     public static function borrar($id_rol){
      $conexionBD= BD::crearInstancia();

      $sql= $conexionBD ->prepare("DELETE FROM rol WHERE id_rol=?");
      
      $sql -> execute(array($id_rol));

     }

     public static function buscar($id_rol){
      $conexionBD= BD::crearInstancia();

      $sql= $conexionBD ->prepare("SELECT * FROM rol WHERE id_rol=?");
      
      $sql -> execute(array($id_rol));

      $roles=$sql->fetch();
      
      return new Rol($roles['id_rol'], $roles['rol']);
     }

     public static function editar($id_rol, $rol){

      $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("UPDATE rol SET rol=? WHERE id_rol=?");
        
        $sql -> execute(array($rol, $id_rol));

     }
     
}




?>