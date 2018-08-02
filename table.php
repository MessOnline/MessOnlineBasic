<?php session_start();

if (!isset($_SESSION['name'])) {
  header("Location: index.html");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mess Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="w3-top">
		  	
  <div class="w3-bar" style="margin-left: 200px; width: 100%; background-color: #34495e">
    <a href="home.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
    <a href="table.php" class="w3-bar-item w3-button"><i class="fa fa-cutlery"></i> Mess Menu</a>
    <a href="notice.php" class="w3-bar-item w3-button"><i class="fa fa-calendar-check-o"></i> Notice Board</a>
    <a href="info.php" class="w3-bar-item w3-button"><i class="fa fa-vcard-o"></i> Info</a>

    <div><?php

    if (isset($_SESSION['name'])) {
    echo '<form action="includes/logout.inc.php" method="POST">
      <input type="submit" name="submit" value="LogOut">
    </form>';
  }
  ?></div>

  <br>

  <div class="w3-container w3-allerta" style="background-color: #117011">
  <h1>Welcome to Aryabhatt Mess Menu!</h1>
</div>

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
	<div class="w3-container w3-allerta w3-center">
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Sunday</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">BreakFast<br>(8:00 - 9:30 pm)</td>
								<td class="column100 column2" data-column="column2">Aaloo Paratha</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">Puri Sabji</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Lunch<br>(12:30 - 2:00 pm)</td>
								<td class="column100 column2" data-column="column2">Veg/Non-Veg Biryani</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Dinner<br>(8:30 - 10:00 pm)</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

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
          <input class="w3-input w3-border" type="text" placeholder="Message" name="message" required>
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