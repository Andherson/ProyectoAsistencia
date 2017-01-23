<?php

require 'conexion.php';

function registrarEntrada($codbus,$tiempo) {

    $datosUsuario = array();

    $conexion = conexion();
    $string1 = "SELECT * from usuario where cod_usuario = $codbus";
    $string2 = "INSERT INTO asistencia (id_asistencia,timein,timeout,cod_usuario)
                values('','$tiempo','','$codbus')";
    $consulta = mysqli_query($conexion, $string1) or die('error en la consulta'.mysqli_connect_error());

    $datosUsuario = mysqli_fetch_assoc($consulta);

    if(!is_null($datosUsuario)){
        mysqli_query($conexion, $string2) or die('error en la consulta'.mysqli_connect_error());
        return $datosUsuario;
    }else
        return ;

}

