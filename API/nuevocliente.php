<?php

    include "config.php";
    
    /**
    * Define la consulta SQL para insertar un nuevo registro en la tabla `clientes`.
    * @var string $peticion La consulta SQL a ejecutar.
    */

    $peticion = "
        INSERT INTO clientes
        VALUES(
            NULL,
            '".$_GET['nombre']."',
            '".$_GET['cif']."',
            '".$_GET['direccion']."',
            '".$_GET['cp']."',
            '".$_GET['horario']."',
            '".$_GET['telefono']."'
        );";

    /**
    * Ejecuta la consulta SQL utilizando la conexión a la base de datos.
    */
    
    $resultado = mysqli_query($conexion, $peticion);

?>