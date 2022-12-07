<?php 
    include "../vistas/header.php"; 
    include "../backend/conexion.php";
    
    $conexion = conexion();
    $Continente = "";
    if(isset($_GET['Continente'])){
        $Continente = $_GET['Continente'];
        $sql = "SELECT * FROM t_paises Where Continente ='$Continente'";
    } else {
        $sql = "SELECT * FROM t_paises";
    }
    
    $respuesta = mysqli_query($conexion,$sql);
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="cuerpoCard">
                    <div class="card-body">
                        <table id="table" class="table table-striped" style="width:100%" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Pais</th>
                                    <th>Continente</th>
                                    <th>Bandera</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($ver= mysqli_fetch_array($respuesta)):?>
                                <tr>
                                    <td><?php echo $ver['id'];?></td>
                                    <td><?php echo $ver['Pais'];?></td>
                                    <td><?php echo $ver['Continente'];?></td>
                                    <td><img src="<?php echo $ver['bandera'];?>" alt="" width="100px"></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <a href="../vistas/index.php"><button class="btn btn-primary">Regresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include "../vistas/footer.php"; ?>