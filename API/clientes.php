<?php

    /**
    * Define la consulta SQL para seleccionar todos los registros de la tabla `clientes`.
    * Ejecuta la consulta SQL utilizando la conexión a la base de datos.
    * @param mysqli $conexion La conexión a la base de datos.
    * @param string $peticion La consulta SQL a ejecutar.
    * @return mysqli_result|false El resultado de la consulta o false en caso de error.
    */

    include "config.php";
    
    $peticion = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexion, $peticion);
    $datos = [];
    while($fila = mysqli_fetch_assoc($resultado)){
        $datos[] = $fila;
    }
    $json = json_encode($datos);
    echo $json;
    
?>