<!-- for display iphones list -->
<?php

    include './configuration/connection.php';

    $run_iphone_list_query = "SELECT * FROM `iphone`";

    $run_iphone = mysqli_query($conn, $run_iphone_list_query);

    $total_iphone = mysqli_num_rows($run_iphone);


?>


<!-- for display computer -->
<?php

    include './configuration/connection.php';

    $run_computer_list_query = "SELECT * FROM `macbook`";

    $run_computer = mysqli_query($conn, $run_computer_list_query);

    $total_computer = mysqli_num_rows($run_computer);

?>


<!-- for display ipad -->
<?php 

    include './configuration/connection.php';

    $run_ipad_list_query = "SELECT * FROM `ipad`";

    $run_ipad = mysqli_query($conn, $run_ipad_list_query);

    $total_ipad = mysqli_num_rows($run_ipad);


?>

<!-- for display watch -->
<?php 

    include './configuration/connection.php';

    $run_watch_list_query = "SELECT * FROM `watch`";

    $run_watch = mysqli_query($conn, $run_watch_list_query);

    $total_watch = mysqli_num_rows($run_watch);


?>


<!-- for display tv -->
<?php 

    include './configuration/connection.php';

    $run_tv_list_query = "SELECT * FROM `tv`";

    $run_tv = mysqli_query($conn, $run_tv_list_query);

    $total_tv = mysqli_num_rows($run_tv);


?>






<!-- for delete iphone item -->
<?php 

    include './configuration/connection.php';

    if(isset($_GET['deletePhone'])){
        $phone_id = $_GET['deletePhone'];
        mysqli_query($conn, "DELETE FROM `iphone` WHERE id = '$phone_id'");
        header("location:admin.php");
    }

?>

<!-- for delete computer item -->
<?php 

    include './configuration/connection.php';

    if(isset($_GET['deleteComputer'])){
        $computer_id = $_GET['deleteComputer'];
        mysqli_query($conn, "DELETE FROM `macbook` WHERE id = '$computer_id'");
        header("location:admin.php");
    }

?>


<!-- for delete ipad item -->
<?php

    include './configuration/connection.php';
    if(isset($_GET['deleteIpad'])){
        $ipad_id = $_GET['deleteIpad'];
        mysqli_query($conn, "DELETE FROM `ipad` WHERE id = '$ipad_id'");
        header("location:admin.php");
    }

?>

<!-- for delete watch item -->
<?php

    include './configuration/connection.php';
    if(isset($_GET['deleteWatch'])){
        $watch_id = $_GET['deleteWatch'];
        mysqli_query($conn, "DELETE FROM `watch` WHERE id = '$watch_id'");
        header("location:admin.php");
    }

?>

<!-- for delete tv item -->
<?php

    include './configuration/connection.php';
    if(isset($_GET['deleteTv'])){
        $tv_id = $_GET['deleteTv'];
        mysqli_query($conn, "DELETE FROM `tv` WHERE id = '$tv_id'");
        header("location:admin.php");
    }

?>





<!-- for display admin name -->
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
        header("location:index.php");
    }


    $load_admin_name = "SELECT * FROM `admin` WHERE id = '$admin_id'";

    $run_query = mysqli_query($conn, $load_admin_name);

    if(mysqli_num_rows($run_query)){
        $admin_name = mysqli_fetch_assoc($run_query);
    }

    

?>


<!-- create new admin -->
<?php

    include './configuration/connection.php';
    if(isset($_POST['addAdmin'])){
        $adminFullName = $_POST['fullName'];
        $adminUserName = $_POST['userName'];
        $adminPass = $_POST['newPass'];

        $insert_admin = "INSERT INTO `admin` (admin_user, admin_pass, fullName) VALUES ('$adminUserName', '$adminPass', '$adminFullName')";

        mysqli_query($conn, $insert_admin);
    }

?>



<!-- Upload products -->
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
                header("location:admin.php");
            }else{
                echo "<script> alert('Something went wrong Admin!'); </script>";
            }
        }

        elseif($catagory == "ipad"){
            $insert_products = "INSERT INTO `ipad` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin ! Thank you"); </script>';
                header("location:admin.php");
            }else{
                echo "<script> alert('Something went wrong Admin!'); </script>";
            }
        }

        elseif($catagory == "watch"){
            $insert_products = "INSERT INTO `watch` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin ! Thank you"); </script>';
                header("location:admin.php");
            }else{
                echo "<script> alert('Something went wrong Admin!'); </script>";
            }
        }

        elseif($catagory == "tv"){
            $insert_products = "INSERT INTO `tv` (item_name, item_price, item_cpu, item_ram, item_storage, screen_size, photo) VALUES ('$item', '$price', '$cpu', '$ram', '$storage', '$screen', '$image')";

            move_uploaded_file($image_tmp_name, $image_folder);


            if(mysqli_query($conn, $insert_products)){
                echo '<script> alert("Upload Success Admin ! Thank you"); </script>';
                header("location:admin.php");
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
    <title>Admin || Apple Store</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <!-- local css -->
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>

    <button id="addProductsBtn">Add products</button>
    <button id="newAdmin">New Admin</button>
    <a class="mainLogout" href="admin.php?logout=<?php echo $admin_id ?>">Logout</a>
    <a class="report" href="./sales_report.php">View Report</a>

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
            <option value="ipad">IPad Series</option>
            <option value="watch">Apple Watch Series</option>
            <option value="tv">Apple TV</option>
        </select>

        <h3>Device specification.....</h3>
        <div class="description">
            <input type="text" name="cpu" id="" placeholder="Cpu specification">
            <input type="number" name="ram" id="" placeholder="Ram specification">
            <input type="number" name="storage" id="" placeholder="Storage specification">
            <input type="text" name="screen" id="" placeholder="Screen Size / Device Size">
        </div>

        <input type="file" name="image" id="" accept="image/jpeg, image/png, image/jpg">

        <input type="submit" name="upload" value="Upload">
        <a class="logout" href="admin.php?logout=<?php echo $admin_id ?>">Logout</a>
    </form>
    <!-- products upload end -->


    <!-- add new admin -->
    <form id="adminForm" action="" method="post">
        <div class="head">
            <h1>Register New Admin</h1>
            <button id="closeAdminForm"><i class="fas fa-times-circle"></i></button>
        </div>
        
        <input type="text" name="fullName" id="" placeholder="Enter Full name.........">
        <input type="text" name="userName" id="" placeholder="Create user name..........">
        <input type="password" name="newPass" id="" placeholder="Create password..........">
        <input type="submit" name="addAdmin" value="Register">
    </form>
    <!-- add new admin end -->



    <!-- list of apple phones -->
    <section id="iphone_list" class="products_list">
        <div class="head">
            <h1>Apple Store Dashboard</h1>
            <h3 class="welcome">Welcome Admin <?php echo $admin_name['admin_user']; ?></h3>

            <h3>List of Iphones (Total <?php echo $total_iphone ?>)</h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Procossor</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Screen Size</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all iphones in table
                if(mysqli_num_rows($run_iphone) > 0){
                    while($iphone_row = mysqli_fetch_assoc($run_iphone)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $iphone_row['id']; ?></</th>
                                <td><?php echo $iphone_row['item_name']; ?></td>
                                <td><?php echo $iphone_row['item_price']; ?> ৳</td>
                                <td><?php echo $iphone_row['item_cpu']; ?></</td>
                                <td><?php echo $iphone_row['item_storage']; ?> GB</td>
                                <td><?php echo $iphone_row['item_ram']; ?> GB</td>
                                <td><?php echo $iphone_row['screen_size']; ?> inch</td>
                                <td><a href="./admin.php?deletePhone=<?php echo $iphone_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a target="_blank" href="./view_iphone_products.php?viewPhone=<?php echo $iphone_row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Item Not Found";
                }

            ?>
                
            </tbody>
        </table>

    </section>
    <!-- list of apple phones end -->


    <!-- list of apple computer -->
    <section id="computer_list" class="products_list">
        <div class="head">
            <h3>List of Computer (Total <?php echo $total_computer ?>) </h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Procossor</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Screen Size</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all iphones in table
                if(mysqli_num_rows($run_computer) > 0){
                    while($computer_row = mysqli_fetch_assoc($run_computer)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $computer_row['id']; ?></</th>
                                <td><?php echo $computer_row['item_name']; ?></td>
                                <td><?php echo $computer_row['item_price']; ?> ৳</td>
                                <td><?php echo $computer_row['item_cpu']; ?></</td>
                                <td><?php echo $computer_row['item_storage']; ?> GB</td>
                                <td><?php echo $computer_row['item_ram']; ?> GB</td>
                                <td><?php echo $computer_row['screen_size']; ?> inch</td>
                                <td><a href="./admin.php?deleteComputer=<?php echo $computer_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a target="_blank" href="./view_computer_products.php?viewComputer=<?php echo $computer_row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Item Not Found";
                }

            ?>
                
            </tbody>
        </table>

    </section>
    <!-- list of apple computer end -->


    <!-- list of apple ipad -->
    <section id="computer_list" class="products_list">
        <div class="head">
            <h3>List of IPad (Total <?php echo $total_ipad ?>) </h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Procossor</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Screen Size</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all iphones in table
                if(mysqli_num_rows($run_ipad) > 0){
                    while($ipad_row = mysqli_fetch_assoc($run_ipad)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $ipad_row['id']; ?></</th>
                                <td><?php echo $ipad_row['item_name']; ?></td>
                                <td><?php echo $ipad_row['item_price']; ?> ৳</td>
                                <td><?php echo $ipad_row['item_cpu']; ?></</td>
                                <td><?php echo $ipad_row['item_storage']; ?> GB</td>
                                <td><?php echo $ipad_row['item_ram']; ?> GB</td>
                                <td><?php echo $ipad_row['screen_size']; ?> inch</td>
                                <td><a href="./admin.php?deleteIpad=<?php echo $ipad_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a target="_blank" href="./view_ipad_products.php?viewIpad=<?php echo $ipad_row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Item Not Found";
                }

            ?>
                
            </tbody>
        </table>

    </section>
    <!-- list of apple ipad end -->


    <!-- list of apple watch -->
    <section id="computer_list" class="products_list">
        <div class="head">
            <h3>List of Apple Watch (Total <?php echo $total_watch ?>) </h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Procossor</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Screen Size</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all watch in table
                if(mysqli_num_rows($run_watch) > 0){
                    while($watch_row = mysqli_fetch_assoc($run_watch)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $watch_row['id']; ?></</th>
                                <td><?php echo $watch_row['item_name']; ?></td>
                                <td><?php echo $watch_row['item_price']; ?> ৳</td>
                                <td><?php echo $watch_row['item_cpu']; ?></</td>
                                <td><?php echo $watch_row['item_storage']; ?> GB</td>
                                <td><?php echo $watch_row['item_ram']; ?> GB</td>
                                <td><?php echo $watch_row['screen_size']; ?> inch</td>
                                <td><a href="./admin.php?deleteWatch=<?php echo $watch_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a target="_blank" href="./view_watch_products.php?viewWatch=<?php echo $watch_row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Item Not Found";
                }

            ?>
                
            </tbody>
        </table>

    </section>
    <!-- list of apple watch end -->

    <!-- list of apple tv -->
    <section id="computer_list" class="products_list">
        <div class="head">
            <h3>List of Apple TV (Total <?php echo $total_tv ?>) </h3>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Procossor</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Screen Size</th>
                </tr>
            </thead>
            <tbody>

            <?php

                // for display all tv in table
                if(mysqli_num_rows($run_tv) > 0){
                    while($tv_row = mysqli_fetch_assoc($run_tv)){
                        ?>

                            <tr>
                                <th scope="row"><?php echo $tv_row['id']; ?></</th>
                                <td><?php echo $tv_row['item_name']; ?></td>
                                <td><?php echo $tv_row['item_price']; ?> ৳</td>
                                <td><?php echo $tv_row['item_cpu']; ?></</td>
                                <td><?php echo $tv_row['item_storage']; ?> GB</td>
                                <td><?php echo $tv_row['item_ram']; ?> GB</td>
                                <td><?php echo $tv_row['screen_size']; ?> inch</td>
                                <td><a href="./admin.php?deleteTv=<?php echo $tv_row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                                <td><a target="_blank" href="./view_tv_products.php?viewTv=<?php echo $tv_row['id']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>

                        <?php 
                    }
                }else{
                    echo "Item Not Found";
                }

            ?>
                
            </tbody>
        </table>

    </section>
    <!-- list of apple watch end -->



    <script>
        const addProductsBtn = document.getElementById("addProductsBtn");
        const newAdmin = document.getElementById("newAdmin");
        const closeAdminForm = document.getElementById("closeAdminForm");
        
        addProductsBtn.addEventListener("click", () => {
            const productsForm = document.getElementById("productsForm");
            document.getElementById("iphone_list").classList.toggle("blur");
            document.getElementById("computer_list").classList.toggle("blur");
            productsForm.classList.toggle("expand");
        });


        newAdmin.addEventListener("click", () => {
            const adminForm = document.getElementById("adminForm");
            document.getElementById("iphone_list").classList.toggle("blur");
            document.getElementById("computer_list").classList.toggle("blur");
            adminForm.classList.toggle("expand");
        })
        
        closeAdminForm.addEventListener("click", () => {
            const adminForm = document.getElementById("adminForm");
            adminForm.classList.remove("expand")

        })
    </script>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>