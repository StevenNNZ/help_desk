<?php 
    //Se crea la clase categoria que hereda de la clase Conectar
    class Categoria extends Conectar{
        public function getCategoria(){
            //Se llama el método Conexion() de la clase padre y se asgina a la variable $conectar
            $conectar = parent::Conexion();
            //Se llama el método set_names() de la clase padre
            parent::set_names();
            //Se declara la variable sql y se le asigna la consulta sql
            $sql="SELECT * FROM tm_categoria WHERE est=1;";
            //Se asgina la variable $conectar y se llama el método prepare(), se le envia la consulta por medio de los parámetros
            $sql=$conectar->prepare($sql);
            //Se ejecuta la sentencia sql
            $sql->execute();
            //Se retorla la variable resultado, la cual se le asigna la variable sql, la cual llama el metodo fetchAll() Este método trae todo lo que la conexion sql ha podido recuperar. 
            return $resultado=$sql->fetchAll();
        }
    }
?>