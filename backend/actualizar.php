<?php
    include "../backend/conexion.php";
    $conexion = conexion();

    $id = $_POST['id'];
    $Pais = $_POST['Pais'];
    $Continente = $_POST['Continente'];
    $bandera = $_POST['url'];

    $sql = "UPDATE t_paises SET Pais = '$Pais' , Continente = '$Continente', bandera = '$bandera' WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../vistas/banderas.php');
    }else{
        echo "No se pudo actualizar";
    }

?>