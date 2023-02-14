<?php 
    include './configuration/connection.php';

    if(isset($_POST['add_to_cart'])){
        $product_name = $_POST['product_name'];
        $product_prize = $_POST['product_prize'];
        $product_img = $_POST['product_img'];
        $product_quantity = 1;

        // if the product is already listed in cart
        $search_cart = "SELECT * FROM `cart` WHERE name = '$product_name'";
        $run_search_cart = mysqli_query($conn, $search_cart);

        if(mysqli_num_rows($run_search_cart) > 0){
            echo '<script> alert("Item already added to cart"); </script>';
        }else{
            $load_to_cart = "INSERT INTO `cart` (name, prize, imege, quantity) VALUES('$product_name', '$product_prize', '$product_img', '$product_quantity')";

            mysqli_query($conn, $load_to_cart);

            echo '<script> alert("Item added to cart"); </script>';

        }
    }

    // how many items in cart
    $items  = "SELECT * FROM `cart`";
    $items_query = mysqli_query($conn, $items);
    $count = mysqli_num_rows($items_query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone || Apple Store || By Fahmida Yeasmin</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include './header.php' ?>


    <?php include './login_system.php' ?>

    <main>
        <h1 class="title" id="pc">Computer Item's</h1>
        <section id="products">

            <?php 

                // php code for display computers

                include './configuration/connection.php';

                $get_macbook = "SELECT * FROM `macbook`";

                $run = mysqli_query($conn, $get_macbook);

                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_assoc($run)){

                        ?>
                            <form action="" method="post">
                                <div class="cards">
                                    <div class="cards_img">
                                        <img src="<?php echo './upload_img/'. $row['photo']; ?>" alt="">
                                    </div>

                                    <div class="cards_title">
                                        <h1 class="product_name"><?php echo $row['item_name']; ?></h1>
                                        <!-- <div class="details">
                                            <h4><?php echo $row['item_cpu']; ?> Chip</h4>
                                            <h4> <?php echo $row['item_ram']; ?> GB / <?php echo $row['item_storage'] ?> GB</h4>
                                            <h4> <?php echo $row['screen_size']; ?> inch super ratina xdr display </h4>
                                        </div> -->
                                    </div>

                                    <div class="price">
                                        <h2>$ <?php echo $row['item_price'] ?></h2>
                                        <a class="btn btn-primary" href="view_computer_products.php?viewComputer=<?php echo $row['id']; ?>" target="_blank"><i class="fa-solid fa-eye"></i> View</a>
                                    </div>

                                    <div class="cart mt-3">
                                        <input type="hidden" name="product_name" value="<?php echo $row['item_name'] ?>">
                                        <input type="hidden" name="product_prize" value="<?php echo $row['item_price'] ?>">
                                        <input type="hidden" name="product_img" value="<?php echo $row['photo'] ?>">
                                        <input class="btn btn-primary w-100" name="add_to_cart" type="submit" value="Add to Cart">
                                    </div>
                                </div>
                            </form>

                        <?php
                    }
                }
                else{
                    echo "NO DATA FOUND";
                }
            
            ?>
        </section>
    </main>


    <?php include './footer.php'; ?>


    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>