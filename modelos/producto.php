<?php


class Producto{

    public $id_producto;
    public $nombre_producto;
    public $tipo_producto;

    public function __construct($id_producto, $nombre_producto, $tipo_producto)
    {
        $this->id_producto=$id_producto;
        $this->nombre_producto=$nombre_producto;
        $this->tipo_producto=$tipo_producto;
    }

    public static function consultar(){
        $listaProducto=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM producto");

        foreach($sql->fetchALL() as $producto){
            $listaProducto[]= new Producto($producto['id_producto'], $producto['nombre_producto'], $producto['tipo_producto']);
        }

        return $listaProducto;
    }


    public static function crear($nombre_producto, $tipo_producto){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("INSERT INTO producto(nombre_producto, tipo_producto) VALUES(?,?)");

        $sql -> execute(array($nombre_producto, $tipo_producto));
    }


    public static function borrar($id_producto){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("DELETE FROM producto WHERE id_producto=?");

        $sql -> execute(array($id_producto));
    }

    public static function buscar($id_producto){
        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("SELECT * FROM producto WHERE id_producto=?");

        $sql -> execute(array($id_producto));

        $producto=$sql->fetch();

        return new Producto($producto['id_producto'], $producto['nombre_producto'], $producto['tipo_producto']);
    }


    public static function editar($id_producto, $nombre_producto, $tipo_producto){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD ->prepare("UPDATE producto SET nombre_producto=?, tipo_producto=? WHERE id_producto=?");

        $sql -> execute(array($nombre_producto, $tipo_producto, $id_producto));
    }
}


?>