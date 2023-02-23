<?php 

    // for display individual products
    include './configuration/connection.php';

    if(isset($_GET['viewWatch'])){
        $watch_id = mysqli_real_escape_string($conn, $_GET['viewWatch']);

        $view_watch_query = "SELECT * FROM `watch` WHERE id = '$watch_id'";

        $output = mysqli_query($conn, $view_watch_query);

        $watch = mysqli_fetch_assoc($output);
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
    <title><?php echo $watch['item_name']; ?> || Apple Store by Fahmida</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/view_products.css">
</head>
<body>
    <?php include './header.php' ?>


    <?php include './login_system.php' ?>

    <div id="wrapper">
        <div class="left">
            <img src="./upload_img/<?php echo $watch['photo']; ?>" alt="">
        </div>
        <div class="right">
            <h1><?php echo $watch['item_name']; ?></h1>
            <p class="price"> <i class="fa-solid fa-tag"></i> <?php echo $watch['item_price']; ?> ৳</p>

            <h2>Key Feature</h2>


            <div class="feature">
                <h4>CPU: <?php echo $watch['item_cpu']; ?></h4>
                <h4>Storage: <?php echo $watch['item_storage']; ?> GB</h4>
                <h4>Ram: <?php echo $watch['item_ram']; ?> GB</h4>
                <h4>Screen: <?php echo $watch['screen_size']; ?> inch Super Retina LTPO OLED Display</h4>
                <h4>Sim: e-SIM</h4>
                <h4>Network: WIFI dual band, Blutooth 5.0</h4>
                <h4>Battery: 309mah Lithium non removable</h4>
                <h4>Operating System: Apple watchOS</h4>
            </div>
        </div>

        <section>
            <p>Apple Store by Fahmida Yeasmin. All rights resurved.</p>
        </section>
    </div>

    <?php include './footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>