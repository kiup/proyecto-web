<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 21/05/2017
 * Time: 08:05 PM
 */

    $conn = new mysqli('localhost', 'root', '', 'equipo5_conferencias');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
?>
