<?php include("db.php");
include("includes/header.php"); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Upload Product</title>
</head>
<body>
    <div class="card" style="width:50%; margin-left:25%; margin-top:7%;">
        <div class="card-body">
            <h4 style="margin-left:40%; ">Upload Product</h4>
            <form action="saves.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="name_product" placeholder="Name Product" REQUIRED autofocus>
                </div>
                <br>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="description" placeholder="Description Product"></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <input type="file" name="image" accept="image/" enctype="multypart/form-data"required>
                    <br><br>
                </div>
                <input class="btn btn-info" name="save_product" style="width:100%;" type="submit" value="Save Product">
            </form>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>