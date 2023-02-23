<?php 

include '../configuration/connection.php';

if($_GET['upTv']){
    $get_tv_id = $_GET['upTv'];
    $search_tv =  mysqli_query($conn, "SELECT * FROM `tv` WHERE id = '$get_tv_id'");

    if(mysqli_num_rows($search_tv) > 0){
        $get_tv = mysqli_fetch_assoc($search_tv);
    }
}

if(isset($_POST['update'])){
    $product_id = $_POST['product_id'];
    $new_item_name = $_POST['new_item_name'];
    $new_item_price = $_POST['new_item_price'];
    $new_item_cpu = $_POST['new_item_cpu'];
    $new_item_ram = $_POST['new_item_ram'];
    $new_item_storage = $_POST['new_item_storage'];
    $new_item_screen = $_POST['new_item_screen'];

    $update_query = "UPDATE `tv` SET item_name = '$new_item_name', item_price = '$new_item_price', item_cpu = '$new_item_cpu', item_ram = '$new_item_ram', item_storage = '$new_item_storage', screen_size = '$new_item_screen' WHERE id = '$product_id'";


    mysqli_query($conn, $update_query);
    header('location:../admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update <?php echo $get_tv['item_name'] ?></title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="../css/view_products.css">
</head>
<body>
    <div id="wrapper" style="align-items: flex-start;">
        <div class="left">
            <img src="../upload_img/<?php echo $get_tv['photo']; ?>" alt="">
        </div>
        <div class="right">
            <h3>Update your product</h3>
            <hr>


            <form action="" method="post">
                <input type="hidden" name="product_id" value="<?php echo $get_tv['id']; ?>">
                <div class="form-group">
                    <label for="">New Product Name:</label>
                    <input type="text" class="form-control" name="new_item_name" id="" value="<?php echo $get_tv['item_name'] ?>" placeholder="Enter new product">
                </div>

                <div class="form-group">
                    <label for="">New Product Prize:</label>
                    <input type="text" class="form-control" name="new_item_price" id="" value="<?php echo $get_tv['item_price'] ?>" placeholder="Enter new price">
                </div>

                <div class="form-group">
                    <label for="">New Product CPU Configuration:</label>
                    <input type="text" class="form-control" name="new_item_cpu" id="" value="<?php echo $get_tv['item_cpu'] ?>" placeholder="Enter new cpu">
                </div>

                <div class="form-group">
                    <label for="">New Product RAM Size:</label>
                    <input type="text" class="form-control" name="new_item_ram" id="" value="<?php echo $get_tv['item_ram'] ?>" placeholder="Enter new RAM Size">
                </div>

                <div class="form-group">
                    <label for="">New Product Storage Size:</label>
                    <input type="text" class="form-control" name="new_item_storage" id="" value="<?php echo $get_tv['item_storage'] ?>" placeholder="Enter new storage size">
                </div>

                <div class="form-group">
                    <label for="">New Product Screen Size:</label>
                    <input type="text" class="form-control" name="new_item_screen" id="" value="<?php echo $get_tv['screen_size'] ?>" placeholder="Enter new product screen size">
                </div>

                <input class="btn btn-success" name="update" onclick="return confirm('Are you sure to update this product ?')" type="submit" value="Update Product">
            </form>
        </div>
    </div>
</body>
</html>