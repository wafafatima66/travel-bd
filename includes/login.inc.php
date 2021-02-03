<?php
	session_start();

	if (isset($_POST['login-submit'])) {

		require 'dbh.inc.php';

		$mailuid = $_POST['mailuid'];
		$password = $_POST['pwd'];

		if(empty($mailuid) || empty($password)){
			header("Location: ../signup.php?error=emptyfield"); //you can send back the username if you wish
			exit();
		}
		else{
			$sql = "SELECT * FROM users WHERE User_name=? OR Email=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../signup.php?error=sqlerror"); 
				exit();
			}
			else{

				mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
				mysqli_stmt_execute($stmt);

				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$pwdCheck = password_verify($password, $row['Password']);

					if ($pwdCheck == false) {
						header("Location: ../signup.php?error=wrongpwd"); 
						exit();
					}
					elseif ($pwdCheck == true) {
					
						$_SESSION['name'] = $row['Name'];
						$_SESSION['mailuid'] = $row['User_name'];

						header("Location: ../index.php?submit=success"); 
						exit();
					}
					else{
						header("Location: ../signup.php?error=wrongpwd"); 
						exit();
					}
				}
				else{
					header("Location: ../signup.php?error=nouser"); 
					exit();
				}
			}
		}
	}
	else{
		header("Location: ../signup.php");
		exit();
	}