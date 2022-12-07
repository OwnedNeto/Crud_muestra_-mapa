<?php
    include "../backend/conexion.php";
    $conexion = conexion();
    $Pais = $_POST['Pais'];
    $Continente = $_POST['Continente'];
    $bandera = $_POST['bandera'];
    $sql = "INSERT INTO t_paises (Pais,Continente,bandera) VALUES ('$Pais','$Continente','$bandera')";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header('location:../vistas/banderas.php');
    }else{
        echo "No se pudo insertar";
    }

?>