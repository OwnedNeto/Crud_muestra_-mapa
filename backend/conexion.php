<?php
    function conexion(){
        $servidor = 'localhost';
        $usuario = 'root';
        $password = '';
        $base = 'crud_paises';
        $puerto = 3306;

        $conexion = mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $base,
            $puerto
        );
        return $conexion;
    }
?>