<?php

include './configuration/connection.php';

// press continue
if (isset($_GET['continue'])) {
    $delete_cart_data = "DELETE FROM `cart`";
    mysqli_query($conn, $delete_cart_data);
    header("location:./");
}

// how many items in cart
$items  = "SELECT * FROM `cart`";
$items_query = mysqli_query($conn, $items);
$count = mysqli_num_rows($items_query);

// checkout cart
if (isset($_POST['order'])) {
    $c_name = $_POST['c_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
    $product_total_prize = 0;
    if (mysqli_num_rows($cart_query) > 0) {
        while ($item = mysqli_fetch_assoc($cart_query)) {
            $product_name[] = $item['name'] . " (" . $item['quantity'] . ")";
            $product_prize = $item['prize'] * $item['quantity'];
            $product_total_prize = $product_total_prize + $product_prize;
        }
    }

    $total_product = implode(', ', $product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `checkout` (c_name, phone, email, payment, address, city, products, total_prize) VALUES ('$c_name', '$phone', '$email', '$payment', '$address', '$city', '$total_product', '$product_total_prize')");


    if ($cart_query && $detail_query) {
        echo "
        <div class='order-container'>
            <div class='order'>
                <h3 class='text-center'>Thank you for your shopping</h3>
                <div class='order-detail'>
                    <span>" . $total_product . "</span>
                    <h3 class='text-center'>Total: " . $product_total_prize . " ৳</h3>
                </div>
                <div class='customer'>
                    <h4>Name: " . $c_name . " </h4>
                    <h4>Phone: " . $phone . "</h4>
                    <h4>Email: " . $email . "</h4>
                    <h4>Address: " . $address . "</h4>
                    <h4>City: " . $city . "</h4>
                    <h4>Payment: " . $payment . "</h4>
                </div>
        
                <a class='btn btn-primary' href='./checkout.php?continue'>Continue</a>
            </div>
        </div>
        
        
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout || Appple Store by Fahmida</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/checkout.css">
</head>

<body>
    <?php include './header.php' ?>

    <?php include './login_system.php' ?>

    <form action="" method="post" class="bg-white p-2">
        <h1>Order Now</h1>
        <div class="display_item">
            <?php
            $sub_total = 0;
            $grand_total = 0;
            $get_cart_item = "SELECT * FROM `cart`";
            $run_get_cart_item = mysqli_query($conn, $get_cart_item);

            if (mysqli_num_rows($run_get_cart_item) > 0) {
                while ($cart_item = mysqli_fetch_assoc($run_get_cart_item)) {
                    $sub_total = $cart_item['prize'] * $cart_item['quantity'];
                    $grand_total = $grand_total + $sub_total
            ?>
                    <span class=" text-center"><?php echo $cart_item['name'] . "(" . $cart_item['quantity'] . ")" . ",  " . "&nbsp;" ?></span>
            <?php
                }
            } else {
                echo "No items added on the cart";
            }

            ?>

            <h1 class=" text-center">Grand Total: <?php echo number_format($grand_total) ?> ৳</h1>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" name="c_name" id="" placeholder="Customer name.....">
            </div>

            <div class="col-md-6">
                <input type="number" class="form-control" name="phone" id="" placeholder="Customer phone.....">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" id="" placeholder="Customer email......">
            </div>

            <div class="col-md-6">
                <select name="payment" id="" class="form-control">
                    <option value="cod">Cash on delivary</option>
                    <option value="credit">Credit Card</option>
                    <option value="paypal">Paypal</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" name="address" id="" placeholder="Customer address......">
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" name="city" id="" placeholder="Customer city.....">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-primary b-block w-100" type="submit" name="order" value="Order now">
            </div>
        </div>
    </form>



    <?php include './footer.php' ?>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>