<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://m.facebook.com/p/Manikandan-Mani-100031019013552/?ref=brem&wtsid=rdr_0E4E6JQLbM1kA4wWZ&src=email_notif" target = "_blank" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/?utm_source=pwa_homescreen&__pwa=1" target = "_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/manikandan5710" target = "_blank" class="fab fa-linkedin"></a>
         </div>
         <p><a href="login.php">Log in</a> | <a href="register.php">Sign Up</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">DIGITAL BOOK HUB</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>UserName : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>E-mail : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Log out</a>
         </div>
      </div>
   </div>

</header>