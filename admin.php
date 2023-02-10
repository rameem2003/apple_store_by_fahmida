<?php

    // for display iphones list
    include './configuration/connection.php';

    $run_iphone_list_query = "SELECT * FROM `iphone`";

    $run_iphone = mysqli_query($conn, $run_iphone_list_query);

    $total_iphone = mysqli_num_rows($run_iphone);


?>

<?php

    // for display computer
    include './configuration/connection.php';

    $run_computer_list_query = "SELECT * FROM `macbook`";

    $run_computer = mysqli_query($conn, $run_computer_list_query);

    $total_computer = mysqli_num_rows($run_computer);

?>

<?php 

    // for delete iphone item
    include './configuration/connection.php';

    if(isset($_GET['deletePhone'])){
        $phone_id = $_GET['deletePhone'];
        mysqli_query($conn, "DELETE FROM `iphone` WHERE id = '$phone_id'");
        header("location:admin.php");
    }

?>

<?php 

    // for delete iphone item
    include './configuration/connection.php';

    if(isset($_GET['deleteComputer'])){
        $computer_id = $_GET['deleteComputer'];
        mysqli_query($conn, "DELETE FROM `macbook` WHERE id = '$computer_id'");
        header("location:admin.php");
    }

?>

<?php

    // for display admin name
    include './configuration/connection.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id)){
        header('location:admin_login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($admin_id);
        header("location:index.php");
    }


    $load_admin_name = "SELECT * FROM `admin` WHERE id = '$admin_id'";

    $run_query = mysqli_query($conn, $load_admin_name);

    if(mysqli_num_rows($run_query)){
        $admin_name = mysqli_fetch_assoc($run_query);
    }

    

?>

<?php

    //Upload products
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
                header("location:admin.php");
            }else{
                echo '<script> alert("Something went wrong Admin!"); </script>';
            }
        }
        
        elseif($catagory == "mac"){
            $insert_products = "INSERT INTO `macbook` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin ! Thank you"); </script>';
                header("location:index.php");
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

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- local css -->
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>

    <button id="addProductsBtn">Add products</button>
    <a class="mainLogout" href="admin.php?logout=<?php echo $admin_id ?>">Logout</a>

    <!-- products upload -->
    <form id="productsForm" action="" method="post" enctype="multipart/form-data">
        <h1>Hello Admin <?php echo $admin_name['admin_user']; ?></h1>
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
    <!-- products upload end -->



    <!-- list of apple phones -->
    <section id="iphone_list" class="products_list">
        <div class="head">
            <h1>Apple Store Dashboard</h1>
            <h3 class="welcome">Welcome Admin <?php echo $admin_name['admin_user']; ?></h3>

            <h3>List of Iphones (Total <?php echo $total_iphone ?>)</h3>
        </div>

        <div class="list">
            <div class="row">
                <div class="sl">SL</div>
                <div class="name">Product Name</div>
                <div class="price">Price</div>
                <div class="cpu">Processor</div>
                <div class="storage">Storage</div>
                <div class="ram">Ram</div>
                <div class="screen_size">Screen Size</div>
            </div>


            <?php

                // for display all iphones in table
                if(mysqli_num_rows($run_iphone) > 0){
                    while($iphone_row = mysqli_fetch_assoc($run_iphone)){
                        ?>

                            <div class="row">
                                <div class="sl"><?php echo $iphone_row['id']; ?></div>
                                <div class="name"><?php echo $iphone_row['item_name']; ?></div>
                                <div class="price"><?php echo $iphone_row['item_price']; ?> $</div>
                                <div class="cpu"><?php echo $iphone_row['item_cpu']; ?></div>
                                <div class="storage"><?php echo $iphone_row['item_storage']; ?> GB</div>
                                <div class="ram"><?php echo $iphone_row['item_ram']; ?> GB</div>
                                <div class="screen_size"><?php echo $iphone_row['screen_size']; ?> inch</div>
                                <div class="delete_btn"><a href="./admin.php?deletePhone=<?php echo $iphone_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></div>
                            </div>

                        <?php 
                    }
                }

            ?>
        </div>

    </section>
    <!-- list of apple phones end -->


    <!-- list of apple computer -->
    <section id="computer_list" class="products_list">
        <div class="head">
            <h3>List of Computer (Total <?php echo $total_computer ?>) </h3>
        </div>

        <div class="list">
            <div class="row">
                <div class="sl">SL</div>
                <div class="name">Product Name</div>
                <div class="price">Price</div>
                <div class="cpu">Processor</div>
                <div class="storage">Storage</div>
                <div class="ram">Ram</div>
                <div class="screen_size">Screen Size</div>
            </div>


            <?php
                // for display all computers in table
                if(mysqli_num_rows($run_computer) > 0){
                    while($computer_row = mysqli_fetch_assoc($run_computer)){
                        ?>

                            <div class="row">
                                <div class="sl"><?php echo $computer_row['id']; ?></div>
                                <div class="name"><?php echo $computer_row['item_name']; ?></div>
                                <div class="price"><?php echo $computer_row['item_price']; ?> $</div>
                                <div class="cpu"><?php echo $computer_row['item_cpu']; ?></div>
                                <div class="storage"><?php echo $computer_row['item_storage']; ?> GB</div>
                                <div class="ram"><?php echo $computer_row['item_ram']; ?> GB</div>
                                <div class="screen_size"><?php echo $computer_row['screen_size']; ?> inch</div>
                                <div class="delete_btn"><a href="./admin.php?deleteComputer=<?php echo $computer_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></div>
                            </div>

                        <?php 
                    }
                }

            ?>
        </div>

    </section>
    <!-- list of apple computer end -->



    <script>
        const addProductsBtn = document.getElementById("addProductsBtn");
        
        addProductsBtn.addEventListener("click", () => {
            const productsForm = document.getElementById("productsForm");
            document.getElementById("iphone_list").classList.toggle("blur");
            document.getElementById("computer_list").classList.toggle("blur");
            productsForm.classList.toggle("expand");
        });
    </script>
</body>
</html>