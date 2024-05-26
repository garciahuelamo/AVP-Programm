<?php

    /**
     * Verifica si la sesión está iniciada y establece la variable $sesion en consecuencia.
     * 
     * @var array|string $sesion Contiene los datos de la sesión si está iniciada, o una cadena vacía si no lo está.
     */

    if(isset($_SESSION)){
        $sesion = $_SESSION;
    } else {
        $sesion = "";
    }

    include "config.php";

    /**
    * Define la consulta SQL para insertar un nuevo registro en la tabla `registros`.
    * Ejecuta la consulta SQL utilizando la conexión a la base de datos.
    * @param mysqli $conexion La conexión a la base de datos.
    * @param string $peticion La consulta SQL a ejecutar.
    * @return mysqli_result|false El resultado de la consulta o false en caso de error.
    */

    $peticion = "
        INSERT INTO registros
        VALUES (
            NULL,
            '".DATE('U')."',
            '".$_SERVER['REMOTE_ADDR']."',
            '".$_SERVER['HTTP_USER_AGENT']."',
            '".json_encode($sesion)."',
            '".json_encode($_REQUEST)."')
        ;"
    ;

    $resultado = mysqli_query($conexion, $peticion);
?>