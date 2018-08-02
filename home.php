<?php session_start();

if (!isset($_SESSION['name'])) {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MessOnline</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#log
{
margin-left: 590px;
background-color: #34495e;
margin-top: 5px;
}

#log:hover
{
  background-color: #ccc;
}
</style>
</head>
<body style="background-color: #1ff455">

	<div class="w3-top">
		  	
  <div class="w3-bar" style="margin-left: 200px; width: 100%; background-color: #34495e">
    <a href="home.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
    <a href="table.php" class="w3-bar-item w3-button"><i class="fa fa-cutlery"></i> Mess Menu</a>
    <a href="notice.php" class="w3-bar-item w3-button"><i class="fa fa-calendar-check-o"></i> Notice Board</a>
    <a href="info.php" class="w3-bar-item w3-button"><i class="fa fa-vcard-o"></i> Info</a>

    <?php

    if (isset($_SESSION['name'])) {
    echo '<form action="includes/logout.inc.php" method="POST">
      <input type="submit" name="submit" value="LogOut" id="log">
    </form>';
  }
  ?>

  </div>
</div>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block" style="width:200px; margin-top: -40px; background-color: #e67f13;">
	<img src="images/IET-Lucknow-Logo.png" style="float: left; height: 125px; width: 150px; margin-left: 20px;" alt="logo">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div style="margin-left:200px; margin-top: 40px;">

<div class="w3-container w3-allerta w3-center" style="background-color: #117011">
  <h1>Welcome to Aryabhatt Mess Online!</h1>
</div>

<div class="w3-container">
<h2>You can't build a peaceful world on empty stomachs and human misery.</h2>
<div class="w3-panel w3-leftbar" style="background-color: #9da9b5">
  <p class="w3-xlarge w3-serif">
  <i>"Please don't waste food! You can afford it but remember the Nation can't!</p>
<p>Being unwanted, unloved, uncared for, forgotten by everybody, I think that is a much greater hunger, a much greater poverty than the person who has nothing to eat."</i></p>
  <p>Mother Teresa</p>
</div>
</div>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/Aloo-Paratha-mod.jpg" style="width:100%;">
  <img class="mySlides" src="images/Puri-Sabji.jpg" style="width:100%">
  <img class="mySlides" src="images/Thali mod.jpg" style="width:100%">
  <img class="mySlides" src="images/Samosa-mod.jpg" alt="Samosa-mint chutney" style="width: 100%">
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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</div>

<!-- The Contact Section -->
  <div class="w3-container" style="padding: 5px 3px; margin-left: 200px; background-color: #34495e">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Any Suggestions? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> IET LUCKNOW<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 8439775478<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email:aryabhattmess@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="includes/actionpage.inc.php" method="POST">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" name="fname" required>
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" name="email" required>
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message - 500 characters Only!" name="message" required>
          <button class="w3-button w3-section w3-right" style="background-color: #34495e" name="submit" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
<footer class="w3-container  w3-center w3-xlarge w3-padding-8" style="background-color: #34495e">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Copyright @ 2018 - All rights reserved - <a href="https://www.messonline.com" target="_blank">College Mess</a></p>
</footer>



</body>
</html>