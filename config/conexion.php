<?php
    // script para crear una conexion con la BD

    // Parametros requeridos para la conexion de la BD

    // Parametros DB local - constantes
    define('USER', 'sflorez'); // Crea la constante USER con valor 'root'
    define('PW', '12345');
    define('HOST', 'localhost');
    define('BD', 'centro_medico');

    // Parametros DB remota - (infinityfree)
    /*define('USER', 'sflorez'); // Crea la constante USER
    define('PW', '12345);
    define('HOST', 'localhost');
    define('BD', 'centro_medico');*/

    // Conexion con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Configurar caracteres para tildes y eñes
    mysqli_set_charset($conexion, "utf8");


    if(!$conexion)
    {
        die("Error de conexion: " . mysqli_connect_error());
    }
    else
    {
        die("Conexion con la BD exitosa");
    }
     
?>
