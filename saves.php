<?php 

include('db.php');

if (isset($_POST['save_product'])) {
    $image=$_FILES['image'];
    $tmp=$_FILES['image']['tmp_name'];
    
    $name_product = $_POST['name_product'];
    $description = $_POST['description'];
    $commit_product = $_POST['commit_product'];   
    
    $carpeta='img';
    $ruta=$carpeta.$id.'/'.$image;
    
    @move_uploaded_file($tmp,$carpeta.$id.'/'.$image);



    $query = "INSERT INTO products(image, name_product , description, commit_product) VALUES ('$ruta', '$name_product', '$description','$commit_product')";
    $result = mysqli_query($conn ,$query);
  
   
}

if (isset($_POST['save_client'])) {
    $name_client = $_POST['name_client'];
    $commit_product = $_POST['commit_product'];
  
    $query = "INSERT INTO clients(name_client, commit_product) VALUES ('$name_client', '$commit_product')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
      die("Unpublished Comment");
    }
  
    $_SESSION['message'] = 'Commit Published Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: producto1.php');
  
  }
  $query_product = "INSERT INTO products(image, name_product, description, commit_product)
                    SELECT '$ruta', '$name_product', '$description', clients.commit_product
                    FROM clients
                    WHERE clients.name_client = '$name_client'";

    $result_product = mysqli_query($conn, $query_product);


$SESSION['message'] = 'Published Product';
$SESSION['message'] = 'success';




?>