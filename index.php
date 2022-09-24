<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store || By Fahmida Yeasmin</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    
    <!-- local css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header section -->
    <header>
      
        <div class="logo">
            <img src="./img/logo.png" alt="logo">
        </div>

        <label for="btn" class="menu_btn"><i class="fa-solid fa-bars"></i></label>
        <input type="checkbox" id="btn">

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="admin_login.php" target="_blank">Admin</a></li>
                <li id="login_btn"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user_login">Login</button></li>
                <li id="reg_btn"><button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#create_account">Register</button></li>
                <li class="profile_name"><?php include './configuration/login_user.php'; ?></li>
            </ul>
        </nav>
    </header>
    <!-- main section-->


    <!-- user login forms -->
    <!-- Modal -->
    <div class="modal fade" id="user_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST">
                <label for="email">Enter Email</label>
                <input class="form-control" type="email" name="email" id="email">
                <label for="pass">Enter Password</label>
                <input class="form-control" type="password" name="pass" id="pass">

                <input class="btn btn-danger mt-3 d-block ml-auto" name="login" type="submit" value="Login">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- user login forms end -->


    <!-- create account -->
    <div class="modal fade" id="create_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="./configuration/create_user.php" method="POST">
                <label for="name">Full Name</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="phone">Phone</label>
                <input class="form-control" type="number" name="phone" id="phone">

                <label for="email">Enter Email</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="pass">Enter Password</label>
                <input class="form-control" type="password" name="pass" id="pass">

                <input class="btn btn-primary mt-3 d-block ml-auto" name="register" type="submit" value="Register">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- create account end -->


    <main>
        <section id="cover">
            <div class="blur">
                <h1>Apple world</h1>
                <p>Your favourite apple products is here.</p> <br>
                <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
            </div>
          
        </section>


        <h1 class="title">Phone Items</h1>
        <section id="products">

            <?php 

                // php code for display iphones
            
                include './configuration/connection.php';

                $get_iphone = "SELECT * FROM `iphone`";

                $run = mysqli_query($conn, $get_iphone);

                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_assoc($run)){

                        ?>
                            <div class="cards">
                                <div class="cards_img">
                                    <img src="<?php echo "./upload_img/".$row['photo']; ?>" alt="">
                                </div>

                                <div class="cards_title">
                                    <h1 class="product_name"><?php echo $row['item_name']; ?></h1>
                                    <div class="details">
                                        <h4><?php echo $row['item_cpu']; ?></h4>
                                        <h4> <?php echo $row['item_ram']; ?> GB / <?php echo $row['item_storage'] ?> GB</h4>
                                        <h4> <?php echo $row['screen_size']; ?> inch super ratina xdr display </h4>
                                    </div>
                                </div>

                                <div class="price">
                                    <h2>$ <?php echo $row['item_price'] ?></h2>
                                    <a class="btn btn-primary" href="view_iphone_products.php?viewPhone=<?php echo $row['id']; ?>" target="_blank"><i class="fa-solid fa-cart-shopping"></i> Buy now</a>
                                </div>

                            </div>
                        <?php
                    }
                }else{
                    echo "DATA NOT FOUND";
                }

            ?>
        </section> 

        <h1 class="title">Other's Apple Products</h1>
        <section id="products">

            <?php 

                // php code for display computers

                include './configuration/connection.php';

                $get_macbook = "SELECT * FROM `macbook`";

                $run = mysqli_query($conn, $get_macbook);

                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_assoc($run)){

                        ?>

                            <div class="cards">
                                <div class="cards_img">
                                    <img src="<?php echo './upload_img/'. $row['photo']; ?>" alt="">
                                </div>

                                <div class="cards_title">
                                    <h1 class="product_name"><?php echo $row['item_name']; ?></h1>
                                    <div class="details">
                                        <h4><?php echo $row['item_cpu']; ?> Chip</h4>
                                        <h4> <?php echo $row['item_ram']; ?> GB / <?php echo $row['item_storage'] ?> GB</h4>
                                        <h4> <?php echo $row['screen_size']; ?> inch super ratina xdr display </h4>
                                    </div>
                                </div>

                                <div class="price">
                                    <h2>$ <?php echo $row['item_price'] ?></h2>
                                    <a class="btn btn-primary" href="view_computer_products.php?viewComputer=<?php echo $row['id']; ?>" target="_blank"><i class="fa-solid fa-cart-shopping"></i> Buy now</a>
                                </div>
                            </div>

                        <?php
                    }
                }
                else{
                    echo "NO DATA FOUND";
                }
            
            ?>
        </section>



        <section id="others">
            <div class="left">
                <div class="box">
                    <div class="left">
                        <img src="./img/image12.png" alt="">
                    </div>
                    <div class="right">
                        <h3>Found the New Version</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, est. Quia non aspernatur dignissimos reiciendis.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="left">
                        <img src="./img/image13.png" alt="">
                    </div>
                    <div class="right">
                        <h3>Free Exchange</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, est. Quia non aspernatur dignissimos reiciendis.</p>
                    </div>
                </div>

                <div class="box">
                    <div class="left">
                        <img src="./img/image14.png" alt="">
                    </div>
                    <div class="right">
                        <h3> Contact Our Seller</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, est. Quia non aspernatur dignissimos reiciendis.</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="./img/XMLID1.png" alt="">
            </div>
        </section>
    
    </main>

    <?php include './footer.php'; ?>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>