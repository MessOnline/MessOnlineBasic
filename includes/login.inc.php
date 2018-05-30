<?php

session_start();

if(isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	if(empty($uid) || empty($pwd)) {
		header("Location: ../home_new.php?login=error");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../home_new.php?login='$resultCheck'error");
			exit();
		} elseif ($row = mysqli_fetch_assoc($result)) {
		//De-hashing the passowrd
			$hashedPwdCheck = password_verify("$pwd", $row['user_pwd']);
			if ($hashedPwdCheck == false) {
				header("Location: ../home_new.php?login=error");
				exit();
			} elseif ($hashedPwdCheck == true) {
				//Login the user here
				$_SESSION['name'] = $row['user_name'];
				$_SESSION['email'] = $row['user_email'];
				$_SESSION['mobile'] = $row['user_mob'];
				header("Location: ../home_new.php?login=success");
				exit();
			}
		}
	}
} else {
	header("Location: ../home_new.php?login=error");
	exit();
}

?>