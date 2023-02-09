<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact || Apple Store || By Fahmida Yeasmin</title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/contact.css">

    <style>
        body{
            /* background-image: url(./img/steve\ Jobs.webp); */
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
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
                <li><a href="contact.html">Contact</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="admin_login.php" target="_blank">Admin</a></li>
            </ul>
        </nav>
    </header>

    <section id="wrapper">
        <h1 class="head">Visit our physical center</h1>

        <div class="store_box">
            <div class="box">
                <i class="fa-solid fa-store"></i>
                <h1>Jamuna Future Park</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, corporis magni itaque maiores delectus accusantium nemo incidunt repudiandae distinctio possimus quam inventore, rem praesentium exercitationem dolores blanditiis, vero odit consequuntur?</p>
                <h4>Phone: 01448787877</h4>
            </div>

            <div class="box">
                <i class="fa-solid fa-store"></i>
                <h1>Shah Ali Plaza, Mirpur</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, corporis magni itaque maiores delectus accusantium nemo incidunt repudiandae distinctio possimus quam inventore, rem praesentium exercitationem dolores blanditiis, vero odit consequuntur?</p>
                <h4>Phone: 01448787877</h4>
            </div>

            <div class="box">
                <i class="fa-solid fa-store"></i>
                <h1>Boshundhora City</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, corporis magni itaque maiores delectus accusantium nemo incidunt repudiandae distinctio possimus quam inventore, rem praesentium exercitationem dolores blanditiis, vero odit consequuntur?</p>
                <h4>Phone: 01448787877</h4>
            </div>
        </div>
    </section>


    <?php include './footer.php'; ?>
   
</body>
</html>