<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['fname']);
	$uemail = mysqli_real_escape_string($conn, $_POST['email']);
	$feedback = mysqli_real_escape_string($conn, $_POST['message']);

	//Error Handlers
	if (empty($name) || empty($uemail) || empty($feedback)) {
		header("Location: ../home.php?feedback=empty");
		exit();
	} elseif (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
		header("Location: ../home.php?feedback=invalid name");
		exit();
	} elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../home.php?feedback=invalid email");
		exit();
	} else {
			//Insert the feedback into the database
			$sql = "INSERT INTO feedback (Name, Email, Message) VALUES ('$name', '$uemail', '$feedback');";
			mysqli_query($conn, $sql);
			header("Location: ../home.php?feedback=success");
			exit();
		}

} else {
	header("Location: ../home.php?feedback=failed");
	exit();
}

?>