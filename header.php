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
              <li><a href="./cart.php" class="btn btn-light text-dark mr-2 font-weight-bold">Cart <span><?php echo $count ?></span></a></li>
              <!-- <li><a href="admin_login.php" target="_blank">Admin</a></li> -->
              
              <li id="login_btn"><button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#user_login">Login</button></li>
              <!-- <li id="reg_btn"><button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#create_account">Register</button></li> -->
              <li class="profile_name"><?php include './configuration/login_user.php'; ?></li>
          </ul>
      </nav>
  </header>
  <!-- main section-->