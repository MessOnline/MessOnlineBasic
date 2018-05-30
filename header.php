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
          
        </div>
      </nav>
    </header>
  </div>
</body>
</html>