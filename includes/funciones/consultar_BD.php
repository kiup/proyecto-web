<?php
function consultaBD($conexion, $query){
    $result = mysqli_query($conexion,$query);
    $row=mysqli_fetch_all($result , MYSQLI_ASSOC);
    mysqli_close($conexion);
    return $row;
}


function consultar($conexion, $query){
    mysqli_query($conexion,$query) or die(mysqli_error($conexion));
}