<?php

    /**
     * Establece una conexión a la base de datos MySQL.
     * 
     * @param string $servidor La dirección del servidor de la base de datos.
     * @param string $usuario El nombre de usuario de la base de datos.
     * @param string $contrasena La contraseña de la base de datos.
     * @param string $basededatos El nombre de la base de datos.
     * @return mysqli|false La conexión a la base de datos o false en caso de error.
     */
    
    $usuario = "angiebenzo";
    $contrasena = "angiebenzo";
    $basededatos = "avp_enterprise";
    $servidor = "localhost";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  
?>