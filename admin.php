<?php

    include "./configuration/connection.php";


    if(isset($_POST['upload'])){
        $item = $_POST['item'];
        $price = $_POST['price'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $screen = $_POST['screen'];

        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload_img/'.$image;


        $insert_products = "INSERT INTO `data` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

        move_uploaded_file($image_tmp_name, $image_folder);


        if(mysqli_query($conn, $insert_products)){
            echo '<script> alert("Upload Success Admin Fahmida! Thank you"); </script>';
        }else{
            echo '<script> alert("Something went wrong Admin!"); </script>';
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Apple Store</title>


    <!-- local css -->
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Hello Admin...</h1>
        <p>Upload your products</p>
        <input type="text" name="item" id="name" placeholder="Product name">

        <input type="number" name="price" id="price" placeholder="Product price">


        <h3>Device specification.....</h3>
        <div class="description">
            <input type="text" name="cpu" id="" placeholder="Cpu specification">
            <input type="number" name="ram" id="" placeholder="Ram specification">
            <input type="number" name="storage" id="" placeholder="Storage specification">
            <input type="text" name="screen" id="" placeholder="Screen Size">
        </div>

        <input type="file" name="image" id="" accept="image/jpeg, image/png, image/jpg">

        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>