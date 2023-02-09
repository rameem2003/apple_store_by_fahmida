<?php 

    // for admin login
    include './configuration/connection.php';

    session_start();

    if(isset($_POST['submit'])){
        $admin_user = $_POST['admin_username'];
        $admin_pass = $_POST['admin_pass'];

        $admin_login_query = "SELECT * FROM `admin` WHERE admin_user = '$admin_user' AND admin_pass = '$admin_pass'";

        $run = mysqli_query($conn, $admin_login_query);

        if(mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_assoc($run);
            $_SESSION['admin_id'] = $row['id'];
            header("location:admin.php");
        }else{
            echo '<script> alert("Something went wrong Admin!"); </script>';
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Admin</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/admin_login.css">
</head>
<body>
    <div class="wrapper">
        <h1>Admin login</h1>

        <form action="" method="post">
            <input type="text" name="admin_username" id="" placeholder="Enter username">
            <input type="password" name="admin_pass" id="" placeholder="Enter password">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>