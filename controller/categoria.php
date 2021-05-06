<?php 
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");

    // Se crea una instancia/objeto de la clase Categoria
    $categoria = new Categoria();

    //Se declara un switch para el elemento "op" este lo recibe desde el js de NuevoTicket
    switch($_GET["op"]){
        //En el caso que "op='combo'" (Este valor también se envía a través de js) se realiza lo siguiente:
        case "combo":
            // Se llama el método del modelo Categoria "getCategoria()" y se asigna a la variable.
            $datos = $categoria->getCategoria();
            //Si lo que la variable $datos recibe es un array, y además, recibe más de 0 resultados
            if(is_array($datos) and count($datos)>0){
                $html="";
                //Por cada dato que contenga la variable $datos se le asigna a la variable $row, este ciclo termina hasta que se haya iterado totalmente la variable $datos
                foreach($datos as $row){
                    //Se concatena una etiqueta option que posee un value y un contenido traídos de la base de datos 
                    //Esto se repite hasta que no hayan mas datos en la variable $datos
                    $html.="<option value='".$row['cat_id']."'>".$row['cat_nom']."</option>";
                }
                //Finalmente se escribe o retorna lo que hemos almacenado en la variable $html
                echo $html;
            }
        break;
    }
?>