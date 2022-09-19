<?php

    include './configuration/connection.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id)){
        header('location:admin_login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($admin_id);
        header("location:admin_login.php");
    }


    $load_admin_name = "SELECT * FROM `admin` WHERE id = '$admin_id'";

    $run_query = mysqli_query($conn, $load_admin_name);

    if(mysqli_num_rows($run_query)){
        $admin_name = mysqli_fetch_assoc($run_query);
    }

    

?>

<?php

    include "./configuration/connection.php";


    if(isset($_POST['upload'])){
        $catagory = $_POST['op'];
        $item = $_POST['item'];
        $price = $_POST['price'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $screen = $_POST['screen'];

        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload_img/'.$image;


        if($catagory == "iphone"){
            $insert_products = "INSERT INTO `iphone` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin ! Thank you"); </script>';
            }else{
                echo '<script> alert("Something went wrong Admin!"); </script>';
            }
        }
        
        elseif($catagory == "mac"){
            $insert_products = "INSERT INTO `macbook` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin Fahmida! Thank you"); </script>';
            }else{
                echo "<script> alert('Something went wrong Admin!'); </script>";
            }
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
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">


    <!-- local css -->
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Hello Admin <?php echo $admin_name['admin_user'] ?></h1>
        <p>Upload your products</p>
        <input type="text" name="item" id="name" placeholder="Product name">

        <input type="number" name="price" id="price" placeholder="Product price">

        <h3>Product Catagories...</h3>
        <select class="option" name="op" id="">
            <option value="iphone">Iphone</option>
            <option value="mac">MacBook, iMac Computer</option>
        </select>

        <h3>Device specification.....</h3>
        <div class="description">
            <input type="text" name="cpu" id="" placeholder="Cpu specification">
            <input type="number" name="ram" id="" placeholder="Ram specification">
            <input type="number" name="storage" id="" placeholder="Storage specification">
            <input type="text" name="screen" id="" placeholder="Screen Size">
        </div>

        <input type="file" name="image" id="" accept="image/jpeg, image/png, image/jpg">

        <input type="submit" name="upload" value="Upload">
        <a class="logout" href="admin.php?logout=<?php echo $admin_id ?>">Logout</a>
    </form>
</body>
</html>