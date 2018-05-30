<!DOCTYPE html>
<html lang="en">
<head>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
	<div class="homecss">
    <header>
      <nav>
        <div class="main-wrapper">
          <ul>
            <li><a href="home_new.php">Home</a></li>
            <li><a href="messmenu.php">Mess Menu</a></li>
            <li><a href="#">Feedback/Suggestions</a></li>
          </ul>
        </div>
        <div class="nav-login">
          <form>
            <input type="text" name="uid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
          </form>
          <a href="signup.php">SignUp</a>
        </div>
      </nav>
    </header>
</div>

<section class="main-container">
  <div class="main-wrapper">
    <h2 class="pagetitle">SignUp</h2>
  </div>

  <div id="wrapper">
    <div class="header">
      <h1>Aryabhatt Mess</h1>
    </div>
    <div class="form">
      <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <fieldset class="container">
          <img alt="an image" class="img-circle" src="https://thumbs.dreamstime.com/t/spoon-fork-cross-81702275.jpg">

          <h1 class="caption">Sign Up</h1>

          <input type="text" name="fname" placeholder="Name" required="required"><br>

          <input type="email" name="email" placeholder="Email" required="required"><br>

          <input type="Password" name="pwd1" placeholder="Password" required="required"><br>

          <input type="Password" name="pwd2" placeholder="Repeat Password" required="required"><br>

          <input type="tel" name="mobile" placeholder="Mobile" required="required"><br>

          <input type="submit" value="NEXT" class="button" name="submit"><br>

          <p class="link">Already have an account?<a href="home_new.php" class="link">Login</a></p>
        </fieldset>
      </form>
    </div>
  </div>

</section>
</div>

<?php include_once 'footer.php'; ?>