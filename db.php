<?php

    $db_name = "moviestar";
    $db_host = "localhost: 3307";
    $db_user = "root";
    $db_pass = ""; // digite sua senha do BD

    $conn = new PDO("mysql:dbname=". $db_name . ";host=". $db_host, $db_user, $db_pass);

    // Habilitar erros PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>