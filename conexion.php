<?php

    $mysqli = new mysqli('localhost', 'root', '','base_datos');

    if($mysqli->connect_errno){
        echo 'Fallo la conexion' . $mysqli->connect_error;
        die();    
    }
