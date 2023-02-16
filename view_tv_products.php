<?php 

    // for display individual products
    include './configuration/connection.php';

    if(isset($_GET['viewTv'])){
        $tv_id = mysqli_real_escape_string($conn, $_GET['viewTv']);

        $view_tv_query = "SELECT * FROM `tv` WHERE id = '$tv_id'";

        $output = mysqli_query($conn, $view_tv_query);

        $tv = mysqli_fetch_assoc($output);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tv['item_name']; ?> || Apple Store by Fahmida</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/view_products.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="wrapper">
        <div class="left">
            <img src="./upload_img/<?php echo $tv['photo']; ?>" alt="">
        </div>
        <div class="right">
            <h1><?php echo $tv['item_name']; ?></h1>
            <p class="price"> <i class="fa-solid fa-tag"></i> <?php echo $tv['item_price']; ?> ৳</p>

            <h2>Key Feature</h2>


            <div class="feature">
                <h4>CPU: <?php echo $tv['item_cpu']; ?></h4>
                <h4>Storage: <?php echo $tv['item_storage']; ?> GB</h4>
                <h4>Ram: <?php echo $tv['item_ram']; ?> GB</h4>
                <h4>Screen: <?php echo $tv['screen_size']; ?> inch </h4>
                <h4>Connectivity: WIFI + Ethernet</h4>
                <h4>Network: Bluetooth 5.0, IR Receiver,</h4>
                <h4>Siri Remote: Bluetooth 5.0 wireless technology, USB-C connector for charging, </h4>
                <h4>Supported TV: Requires 4K and HDR TV for 4K and HDR streaming</h4>
                <h4>Operating System: Apple TV OS</h4>
            </div>
        </div>

        <section>
            <p>Apple Store by Fahmida Yeasmin. All rights resurved.</p>
        </section>
    </div>
</body>
</html>