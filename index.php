
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store || By Fahmida Yeasmin</title>
    <!-- <link rel="shortcut icon" href="https://freepngimg.com/download/apple/58741-models-logo-apple-desktop-free-transparent-image-hq.png" type="image/x-icon"> -->
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
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
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contract</a></li>
                <li><a href="products.php">Products</a></li>
            </ul>
        </nav>
    </header>
    <!-- main section-->


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
            
                include './configuration/connection.php';

                $get_iphone = "SELECT * FROM `iphone`";

                $run = mysqli_query($conn, $get_iphone);

                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_assoc($run)){

                        ?>
                            <div class="cards">
                                <div class="card_img">
                                    <img src="<?php echo "./upload_img/".$row['photo']; ?>" alt="">
                                </div>

                                <div class="card_title">
                                    <h1 class="product_name"><?php echo $row['item_name']; ?></h1>
                                    <div class="details">
                                        <h3><?php echo $row['item_cpu']; ?></h3>
                                        <h3> <?php echo $row['item_ram']; ?> GB / <?php echo $row['item_storage'] ?> GB</h3>
                                        <h3> <?php echo $row['screen_size']; ?> inch super ratina xdr display </h3>
                                    </div>
                                </div>

                                <div class="price">
                                    <h2>$ <?php echo $row['item_price'] ?></h2>
                                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                                </div>

                            </div>
                        <?php
                    }
                }else{
                    echo "DATA NOT FOUND";
                }

            ?>
            
            <!-- <div class="cards">
                <div class="card_img">
                    <img src="./img/iphone13.jpg" alt="">
                </div>

                <div class="card_title">
                    <h1>Iphone 13 Pro Max</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 1000</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div>

            <div class="cards">
                <div class="card_img">
                    <img src="./img/iphone12.jpg" alt="">
                </div>

                <div class="card_title">
                    <h1>Iphone 12 Pro Max</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 800</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div>

            <div class="cards">
                <div class="card_img">
                    <img src="./img/i phone .jfif" alt="">
                </div>

                <div class="card_title">
                    <h1>Iphone 11 </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 700</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div> -->

        </section> 

        <h1 class="title">Other's Apple Products</h1>
        <section id="products">
            
            <div class="cards">
                <div class="card_img">
                    <img src="./img/macbook-pro.jfif" alt="">
                </div>

                <div class="card_title">
                    <h1>Macbook pro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 1500</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div>

            <div class="cards">
                <div class="card_img">
                    <img src="./img/airbuds.jfif" alt="">
                </div>

                <div class="card_title">
                    <h1>Apple Ipod</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 600</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div>

            <div class="cards">
                <div class="card_img">
                    <img src="./img/apple  watch.jpg" alt="">
                </div>

                <div class="card_title">
                    <h1>Apple Watch</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus assumenda vitae vel eos, accusamus neque ad unde dolor debitis natus?</p>
                </div>

                <div class="price">
                    <h2>$ 500</h2>
                    <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
                </div>

            </div>
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

            
    
    
  
    
    
    <!-- footer section -->
    <footer>
        <p><i>FOLLOW US ON</i></p>
       

        <div class="containt">
            <div class="containt-box">
                <i class="fa-brands fa-facebook" id="facebook"></i>

                <p>Lorem ipsum dolor sit amet.</p>
            </div>


            <div class="containt-box">
                <i class="fa-brands fa-youtube" id="youtube"></i>

                <p>Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="containt-box">
                <i class="fab fa-whatsapp" id="whats"></i>

                <p>Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="containt-box">
                <i class="fa-brands fa-instagram" id="insta"></i>

                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
              <!--Facebook Icon -->
           

              <!--Youtube Icon -->
           

               <!-- What's up Icon -->
             

            <!--Instagram Icon -->
             
    </footer>
    
    
    <marquee behavior="" direction="">Website Created by Fahmida Yeasmin.☺ ©2022 only use Raw HTML, CSS, JS, PHP. Private Policy Cookies Pilicy Teams Of Use</marquee>
</body>
</html>