<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['fname']);
	$uemail = mysqli_real_escape_string($conn, $_POST['email']);
	$passw1 = mysqli_real_escape_string($conn, $_POST['pwd1']);
	$passw2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

	//Error Handlers
	if (empty($name) || empty($uemail) || empty($passw1) || empty($passw2) || empty($mobile)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} elseif (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
		header("Location: ../signup.php?signup=invalid name");
		exit();
	} elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?signup=invalid email");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$uemail'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			header("Location: ../signup.php?signup=Email already exists");
			exit();
		} elseif ($passw1!=$passw2) {
			header("Location: ../signup.php?signup=Password do not match");
			exit();
		} else {
			//Hashing Password
			$hashedPwd = password_hash($passw1, PASSWORD_DEFAULT);
			//Insert the user into the database
			$sql = "INSERT INTO users (user_name, user_email, user_pwd, user_mob) VALUES ('$name', '$uemail', '$hashedPwd', '$mobile');";
			mysqli_query($conn, $sql);
			header("Location: ../signup.php?signup=success");
			exit();
		}
	}

} else {
	header("Location: ../signup.php");
	exit();
}

?>