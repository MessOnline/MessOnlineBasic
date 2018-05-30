<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <div class="homecss">
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><button class="btn"><i class="fa fa-home"></i><a href="home_new.php"> Home</a></button></li>
            <?php
            if (isset($_SESSION['name'])) {
              echo '<li><button class="btn"><i class="fa fa-bars"></i><a href="messmenu.php"> Mess Menu</a></button></li>
              <li><button class="btn"><i class="fa fa-envelope-open"></i><a href="#">Feedback/Suggestions</a></button></li>';
            }

            ?>
          </ul>
        </div>
        <div class="nav-login">
          <?php

          if (isset($_SESSION['name'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="submit">Logout</button>
            </form>';
          } else {
            echo '<form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
            </form>
            <a href="pksign.html">SignUp</a>;
            <a href="forgot.php">Forgot?</a>';
          }

          ?>
          
        </div>if (isset($_SESSION['name'])) {

  echo '<div class="homecss">
    <section class="main-container">
      <div class="main-wrapper">
        <h2 class="pagetitle">Home</h2>
        
        "You are logged in!";

        </div>
        <div class="w3-content w3-section" style="max-width:50%">
          
          <img class="mySlides" src="http://sherebengal.com/wp-content/uploads/2017/09/Puri-Sabji.jpg" style="width:50%;height: 400px;">
          
          <img class="mySlides" src="https://zaykarecipes.com/wp-content/uploads/2017/08/Aloo-Paratha.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://ik.imagekit.io/h16xi0jtm/images/blogs/12_14986521805Daliyarecipesforyourgrowingbaby737px414px.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://www.seriouseats.com/recipes/images/2012/10/20121004-225008-mint-chutney.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://d1u4oo4rb13yy8.cloudfront.net/article/79310-wfrgbwbprx-1516122023.jpg" style="width:50%;height: 400px;">

        </div>

        <script>
          var myIndex = 0;
          carousel();
          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 3000);
              // Change image every 2 seconds
            }
          </script>
        </section>
      </div>';

      }
      </nav>
    </header>
  </div>



if (isset($_SESSION['name'])) {

  echo '<div class="homecss">
    <section class="main-container">
      <div class="main-wrapper">
        <h2 class="pagetitle">Home</h2>
        
        "You are logged in!";

        </div>
        <div class="w3-content w3-section" style="max-width:50%">
          
          <img class="mySlides" src="http://sherebengal.com/wp-content/uploads/2017/09/Puri-Sabji.jpg" style="width:50%;height: 400px;">
          
          <img class="mySlides" src="https://zaykarecipes.com/wp-content/uploads/2017/08/Aloo-Paratha.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://ik.imagekit.io/h16xi0jtm/images/blogs/12_14986521805Daliyarecipesforyourgrowingbaby737px414px.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://www.seriouseats.com/recipes/images/2012/10/20121004-225008-mint-chutney.jpg" style="width:50%;height: 400px;">

          <img class="mySlides" src="https://d1u4oo4rb13yy8.cloudfront.net/article/79310-wfrgbwbprx-1516122023.jpg" style="width:50%;height: 400px;">

        </div>

        <script>
          var myIndex = 0;
          carousel();
          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 3000);
              // Change image every 2 seconds
            }
          </script>
        </section>
      </div>';

      }

<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>


</body>
</html>





