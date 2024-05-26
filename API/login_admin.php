<?php

    include "config.php";

    /**
    * Define la consulta SQL para seleccionar registros de la tabla `usuarios` 
    * donde el nombre de usuario y la contraseña coinciden con los valores proporcionados.
    * @var string $peticion La consulta SQL a ejecutar.
    * Ejecuta la consulta SQL utilizando la conexión a la base de datos.
    * @param mysqli $conexion La conexión a la base de datos.
    * @param string $peticion La consulta SQL a ejecutar.
    * @return mysqli_result|false El resultado de la consulta o false en caso de error.
    */
    
    $peticion = "SELECT * FROM usuarios
            WHERE 
            usuario = '".$_GET['usuario']."'
            AND
            contrasena = '".$_GET['contrasena']."';
    ";
    $resultado = mysqli_query($conexion, $peticion);


    if($fila = mysqli_fetch_assoc($resultado)){
        echo '{"llave" : "si"}';
    } else{
        echo '{"llave": "no"}';
    }

?>