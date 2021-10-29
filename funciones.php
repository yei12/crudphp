<?php
    function conectar_bd($clave, $basedatos)
    {
        $conexion = new mysqli('localhost', 'root', $clave, $basedatos);

        if ($conexion->connect_error){
            die('Error de conexión ('. $conexion->connect_errno.') '.$conexion->connect_errno);
        }
    return $conexion;
    }

    function consulta ($conexion, $consulta_sql)
    {
        $resultado=$conexion->query($consulta_sql);

        if (!$resultado)
        {
            echo 'No se pudo ejecultar la consulta: ' . $conexion->error;
            exit;
        }
    return $resultado;
    }