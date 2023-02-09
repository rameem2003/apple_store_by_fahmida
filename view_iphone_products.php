<?php 

    // for display individual products
    include './configuration/connection.php';

    if(isset($_GET['viewPhone'])){
        $phone_id = mysqli_real_escape_string($conn, $_GET['viewPhone']);

        $view_phone_query = "SELECT * FROM `iphone` WHERE id = '$phone_id'";

        $output = mysqli_query($conn, $view_phone_query);

        $iphone = mysqli_fetch_assoc($output);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $iphone['item_name']; ?> || Apple Store by Fahmida</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/view_products.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="wrapper">
        <div class="left">
            <img src="./upload_img/<?php echo $iphone['photo']; ?>" alt="">
        </div>
        <div class="right">
            <h1><?php echo $iphone['item_name']; ?></h1>
            <p class="price"> <i class="fa-solid fa-tag"></i> <?php echo $iphone['item_price']; ?> $</p>

            <h2>Key Feature</h2>


            <div class="feature">
                <h4>CPU: <?php echo $iphone['item_cpu']; ?></h4>
                <h4>Storage: <?php echo $iphone['item_storage']; ?> GB</h4>
                <h4>Ram: <?php echo $iphone['item_ram']; ?> GB</h4>
                <h4>Screen: <?php echo $iphone['screen_size']; ?> inch Super Retina XDR OLED Display</h4>
                <h4>SIM Slots: Dual Nano SIM</h4>
                <h4>Network: 5G: Supported by device (network not rolled-out in India), 4G: Available (supports Indian bands), 3G: Available, 2G: Available</h4>
                <h4>Operating System: Apple IOS</h4>
            </div>
        </div>

        <section>
            <p>Apple Store by Fahmida Yeasmin. All rights resurved.</p>
        </section>
    </div>
</body>
</html>