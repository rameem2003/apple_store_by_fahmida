<?php 

$conn =  mysqli_connect("localhost", "root", "", "fahmida");

session_start();

if(isset($_POST['login'])){
    $input_email = $_POST['email'];
    $input_pass = $_POST['pass'];


    $login_query = "SELECT * FROM `users` WHERE user_email = '$input_email' AND user_password = '$input_pass'";


    $run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_assoc($run);
        $_SESSION['name'] = $row['user_name'];

        echo "Hello! ".$_SESSION['name'];
    }
}

?>