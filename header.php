<!-- header section -->
<header>

    <div class="logo">
        <img src="./img/Apple_logo_PNG11.png" alt="logo">
    </div>

    <label for="btn" class="menu_btn"><i class="fa-solid fa-bars"></i></label>
    <input type="checkbox" id="btn">

    <nav>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <!-- <li><a href="products.php">Products</a></li> -->
            <li><a href="./cart.php" class="btn btn-light text-dark mr-2 font-weight-bold">Cart <span><?php echo $count ?></span></a></li>

            <li id="login_btn"><button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#user_login">Login</button></li>
            <li class="profile_name"><?php include './configuration/login_user.php'; ?></li>
        </ul>
    </nav>
</header>
<!-- header section end-->