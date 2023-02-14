<?php

    include './configuration/connection.php';

    // how many items in cart
    $items  = "SELECT * FROM `cart`";
    $items_query = mysqli_query($conn, $items);
    $count = mysqli_num_rows($items_query);


    // delete item form cart
    if(isset($_GET['dl'])){
        $delete_item = $_GET['dl'];
        $delete_query = "DELETE FROM `cart` WHERE id = '$delete_item'";
        mysqli_query($conn, $delete_query);
        header('location:cart.php');
    }

    // delete all items one click
    if(isset($_GET['deleteAll'])){
        $all_delete_query = "DELETE FROM `cart`";
        mysqli_query($conn, $all_delete_query);
        header('location:cart.php');
    }

    // update the quantity of items
    if(isset($_POST['update'])){
        $update_item_id = $_POST['update_item_id'];
        $update_quantity = $_POST['update_quantity'];

        $update_quantity_query = "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_item_id'";
        mysqli_query($conn, $update_quantity_query);
        header('location:cart.php');

    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    <?php include './header.php' ?>


    <?php include './login_system.php' ?>


    <main class="container p-4 bg-light mt-5 rounded" id="cart">
        <div class="row">
            <div class="col-md-7">
                <h1>Cart</h1>
            </div>
            
            <div class="col-md-5">
                <p class="text-right">Total <?php echo $count; ?></p>
            </div>
        </div>

        <div class="row" id="product">
            <div class="col-md-12 my-2">
                <div class="row">
                    <div class="col-md-2 d-flex align-items-center">
                        <p>Item</p>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <p>Item name</p>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <p>Prize</p>
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <p>Quantity</p>
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <p>Sub total</p>
                    </div>
                </div>
            </div>
            <?php 

                $show_products = "SELECT * FROM `cart`";
                $grand_total = 0;
                $show_products_query = mysqli_query($conn, $show_products);

                if(mysqli_num_rows($show_products_query) > 0){
                    while($row = mysqli_fetch_assoc($show_products_query)){
                        ?>

                        <div class="col-md-12 my-2">
                            <div class="row p-4 rounded">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="<?php echo "./upload_img/".$row['imege']; ?>" alt="">
                                </div>
                                <div class="col-md-2 d-flex align-items-center">
                                    <p class="font-weight-bold"><?php echo $row['name']; ?></p>
                                </div>

                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <p><?php echo number_format($row['prize']); ?> ৳</p>
                                </div>

                                <div class="col-md-3 d-flex align-items-center">
                                    
                                    <form action="" method="post">
                                        <input type="hidden" name="update_item_id" value="<?php echo $row['id'] ?>">
                                        <div class="col-md-12 d-flex">
                                            <input class="input-group" type="number" name="update_quantity" id="" min="1" value="<?php echo $row['quantity']; ?>">
                                            <input class="btn btn-warning ml-2" name="update" type="submit" value="update">
                                        </div>
                                    </form>
                                </div>

                                

                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <p><?php echo $sub_total =  $row['prize'] * $row['quantity'] ?></p>
                                </div>

                                <div class="col-md-1 d-flex align-items-center">
                                    <a class="trash" onclick="return confirm('Are you sure you want to delete this item ?')" href="./cart.php?dl=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        // echo number_format($sub_total, 2);
                        $grand_total += $sub_total;
                    }
                }else{
                    echo "No items added to the cart";
                }
            
            ?>


            <div class="col-md-12 mt-4">
                <h1 class="text-center text-danger"> Grand total: <?php echo number_format($grand_total) ?> ৳</h1>
            </div>

        </div>

        <div class="col-md-12 mt-5">
            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all ?')" href="./cart.php?deleteAll">Remove all items</a>
        </div>



    </main>





    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>