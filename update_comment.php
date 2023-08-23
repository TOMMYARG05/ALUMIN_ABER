<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Update comment</title>
    </head>
    <body>
        <?php 
            include('db.php');
            $name_client = "";
            $commit_product="";

            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $query = "SELECT * FROM clients WHERE $id=id";
                $result = mysqli_query ($conn , $query);
                if (mysqli_fetch_assoc($result) == 1) {
                    $row = mysqli_fetch_array($result);
                    $name_client = $row['name_client'];
                    $commit_product = $row['commit_product'];

                }
            }

            if (isset($_POST['update'])) {
                $id = $_GET['id'];
                $name_client = $_POST['name_client'];
                $commit_product = $_POST['commit_product'];

                $query = "UPDATE clients set name_client = '$name_client' , commit_product = '$commit_product' WHERE $id=id";
                mysqli_query($conn , $query);
                $SESSION ['message'] = 'Comment Updated';
                $SESSION ['message_type'] = 'warning';

                header('Location:index.php');
            }
            ?>
        <?php include('includes/header.php');?>
        <br>

        <div class="card" style=" margin-left:25%; width:50%;">
        <br>
            <div class="card-body">
                <form class="form-group" action="update_comment.php?id=<?php echo $_GET['id'];?> " method="POST">
                    <div class="form-group" >
                        <input class="form-control" type="text" name="name_client" placeholder="Write Your Name">
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea class="form-control" type=text name="commit_product" placeholder="Write Comment"></textarea>
                    </div>
                    <br>
                    <input class="btn btn-success" name="update" type="submit" style="width:100%;" value="Publish Comment"></input>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>

