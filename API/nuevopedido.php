<?php

    include "config.php";
    
    /**
    * Define la consulta SQL para insertar un nuevo registro en la tabla `pedidos`.
    * @var string $peticion La consulta SQL a ejecutar.
    */

    $peticion = "
        INSERT INTO pedidos
        VALUES(
            NULL,
            NULL,
            '".$_GET['fecha']."',
            '".$_GET['tipo']."',
            '".$_GET['valor']."',
            '".$_GET['pesoKG']."',
            '".$_GET['destino']."',
            NULL
        );";

    /**
    * Ejecuta la consulta SQL utilizando la conexión a la base de datos.
    * 
    * @param mysqli $conexion La conexión a la base de datos.
    * @param string $peticion La consulta SQL a ejecutar.
    * @return mysqli_result|false El resultado de la consulta o false en caso de error.
    */
    
    $resultado = mysqli_query($conexion, $peticion);

?>