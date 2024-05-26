<?php

    include "config.php";

    /**
    * Define la consulta SQL para seleccionar todos los registros de la tabla `pedidos`.
    * @var string $peticion La consulta SQL a ejecutar.
    */
    
    $peticion = "SELECT * FROM pedidos";
    $resultado = mysqli_query($conexion, $peticion);
    $datos = [];

    /**
    * Almacena los datos de los registros en un array.
    */
    
    while($fila = mysqli_fetch_assoc($resultado)){
        $datos[] = $fila;
    }
    $json = json_encode($datos);
    echo $json;
?>