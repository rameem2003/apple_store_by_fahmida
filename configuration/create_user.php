<?php 

    $conn =  mysqli_connect("localhost", "root", "", "fahmida");


    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $upload_data = "INSERT INTO `users`(user_name, user_phone, user_email, user_password) VALUES ('$name','$phone','$email','$pass')";


        mysqli_query($conn, $upload_data);

        header("location: ../index.php");
    }

?>