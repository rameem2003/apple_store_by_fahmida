<?php 

    include './configuration/connection.php';

    if(isset($_GET['viewComputer'])){
        $computer_id = mysqli_real_escape_string($conn, $_GET['viewComputer']);

        $view_compueter_query = "SELECT * FROM `macbook` WHERE id = '$computer_id'";

        $output = mysqli_query($conn, $view_compueter_query);

        $computer = mysqli_fetch_assoc($output);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $computer['item_name']; ?> || Apple Store by Fahmida</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./view_products.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="wrapper">
        <div class="left">
            <img src="./upload_img/<?php echo $computer['photo']; ?>" alt="">
        </div>
        <div class="right">
            <h1><?php echo $computer['item_name']; ?></h1>
            <p class="price"> <i class="fa-solid fa-tag"></i> <?php echo $computer['item_price']; ?> $</p>

            <h2>Key Feature</h2>


            <div class="feature">
                <h4>CPU: <?php echo $computer['item_cpu']; ?></h4>
                <h4>Storage: <?php echo $computer['item_storage']; ?> GB</h4>
                <h4>Ram: <?php echo $computer['item_ram']; ?> GB</h4>
                <h4>Screen: <?php echo $computer['screen_size']; ?> inch 4K Super Retina XDR Display</h4>
                <h4>Graphics: Radeon Pro 555X 2GB Graphics</h4>
                <h4>WIFI: 802.11ac Wi-Fi wireless networking</h4>
                <h4>Bluetooth: 4.2 wireless technology</h4>
                <h4>Operating System: Apple macOS</h4>
            </div>
        </div>

        <section>
            <p>Apple Store by Fahmida Yeasmin. All rights resurved.</p>
        </section>
    </div>
</body>
</html>