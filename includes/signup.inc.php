<?php

if (isset($_POST['signup-submit'])) {
	
	require 'dbh.inc.php';

	$name = $_POST['name'];
	$age = $_POST['age'];
	$username = $_POST['uid'];
	$phone = $_POST['phone'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$gender = $_POST['gender'];


	if (empty($name) || empty($age) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($gender)) {
		# It will direct the users to the previous page with the data on the fields that was typed in
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
		header("Location: ../signup.php?error=invalidname");
		exit();
	}
	elseif ($age < 16) {
		header("Location: ../signup.php?error=invalidage");
		exit();
	}

	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmailuid");
		exit();
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	else{

		$sql = "SELECT User_name FROM users WHERE User_name=?;";
		# Using prepared statemnets
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../signup.php?error=sqlerror");
		exit();
		}
		else{
			# one "s" for string because the query has one placeholder
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);

			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else{
				$sql = "INSERT INTO users (Name, Age, User_name, Phone, Email, Password, Gender) VALUES (?, ?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../signup.php?error=sqlerror");
				exit();
				}
				else{
					/* Hashing the password
					and, using "PASSWORD_DEFAULT" is more secure
					*/
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT); 

					mysqli_stmt_bind_param($stmt, "sssssss", $name, $age, $username, $phone, $email, $hashedPwd, $gender);
					mysqli_stmt_execute($stmt);					
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	# Closing the database
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
	
	else{
		header("Location: ../signup.php");
				exit();
	}