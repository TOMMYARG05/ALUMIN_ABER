<?php error_reporting(0);
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-1</title>
</head>
<body>
    <?php include('includes/header.php'); ?>

  
        <div class="card card-bordered" style="background:black; color:white;" >
            <img src="https://http2.mlstatic.com/D_NQ_NP_750230-MLA70777596628_072023-O.webp" width="500" height="500" >
            <h3 style="margin-left:45%; position:absolute; bottom:90%;" >Aireador Ventiluz 40x26 Vidrio Reja Y Mosquitero Oferta!!!.</h3>
            <h4 style="margin-left:40%; position:absolute; bottom:80%;">Descripcion.....</h4>
            <p style="width:50%; margin-left:40%; position:absolute; bottom:50%;">
                OESTE ABERTURAS
                Es el resultado de más de 30 años de trayectoria en la fabricación y venta de todo tipo de aberturas, contando con atención al público, opción de retiro por fábrica y una amplia variedad de aberturas adaptadas a tu necesidad
                ATENCIÓN: LOS ENVÍOS AL INTERIOR DEMORAN DE 7 A 10 DÍAS, POR FAVOR, TENER EN CUENTA ANTES DE COMPRAR!
                SU CONSULTA NO MOLESTA!
            </p>
        </div>
        <div class="card" style="width:100%;" >
                <div class="card-body">
                    <h3>Dejar Comentario</h3>
                    <hr>
                    <form class="form-group" action="saves.php" method="POST">
                        <div class="form-group" >
                            <input class="form-control" type="text" name="name_client" placeholder="Write Your Name">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" type=text name="commit_product" placeholder="Write Comment"></textarea>
                        </div>
                        <br>
                        <input class="btn btn-success" name="save_client" type="submit" style="width:100%;" value="Publish Comment"></input>
                    </form>
                </div>
            <h3>Comentarios</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name Client</th>
                        <th>Comment </th>
                        <th style="width:40%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM clients";
                    $result_tasks = mysqli_query($conn, $query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                        <td><?php echo $row['name_client']; ?></td>
                        <td><?php echo $row['commit_product']; ?></td>
                        <td>
                        <a href="update_comment.php?id=<?php echo $row['id']?>" class="btn btn-info" style="width:100%">
                            <i class="fas fa-marker">Update</i>
                        </a>
                        <br>
                        <br>
                        <a href="delete_comment.php?id=<?php echo $row['id']?>" class="btn btn-danger" style="width:100%">
                            <i class="far fa-trash-alt">Delete</i>
                        </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
