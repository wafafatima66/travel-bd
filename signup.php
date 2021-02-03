<?php
	require 'includes/dbh.inc.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/form.css"> </head> </html>
<main>

	<div class="main">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="signup()">Signup</button>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			</div>
				<?php
					
					if (isset($_GET["error"])) {
					 	if ($_GET["error"] == "emptyfields") {
					 		echo '<p class="signuperror">Fill up all the fields!</p>';

					 	}
					 	elseif ($_GET["error"] == "invalidname") {
					 		echo '<p class="signuperror">Invalid characters in naming field!</p>';
					 	}
					 	elseif ($_GET["error"] == "invalidage") {
					 		echo '<p class="signuperror">you are under age!</p>';
					 	}
					 	elseif ($_GET["error"] == "invalidmailuid") {
					 		echo '<p class="signuperror">Invalid username and e-mail!</p>';
					 	}
					 	elseif ($_GET["error"] == "invaliduid") {
					 		echo '<p class="signuperror">Invalid username!</p>';
					 	}
					 	elseif ($_GET["error"] == "invalidmail") {
					 		echo '<p class="signuperror">Invalid e-mail!</p>';
					 	}
					 	elseif ($_GET["error"] == "usertaken") {
					 		echo '<p class="signuperror">The username is not available!</p>';
					 	}
				    	}

					 elseif (isset($_GET["signup"])) {
					 	if($_GET["signup"] == "success"){
					 	echo '<p class="signupsuccess">You have been signed up!</p>';
						 }
						}
					
						?>

						<?php
				
					if (isset($_POST['mailuid'])) {
						echo '<p class="log">You are logged in!</p>';
					}
					elseif(isset($_GET['error'])){

					if ($_GET['error'] == 'emptyfield') {
						echo '<p class="logerr">Fill up all the fields!</p>';
					
					}
					elseif ($_GET['error'] == 'wrongpwd') {
						echo '<p class="logerr">Invalid Password!</p>';
						
					}
					elseif ($_GET['error'] == 'nouser') {
						echo '<p class="logerr">No such user! Please sign up first!</p>';
						
					}
					elseif ($_GET['error'] == 'success') {
						echo '<p class="log">You are logged in!</p>';
						
					}
				}
				
				?>

				
			<form id="signup" class="input-grp" action="includes/signup.inc.php" method="POST">
				<input class="input-fd" type="text" name="name" placeholder="Name"><br>
				<input class="input-fd" type="text" name="age" placeholder="Age"><br>
				<input class="input-fd" type="text" name="uid" placeholder="Username"><br>
				<input class="input-fd" type="text" name="phone" placeholder="Mobile"><br>
				<input class="input-fd" type="text" name="mail" placeholder="Email"><br>
				<input class="input-fd" type="password" name="pwd" placeholder="Password"><br><br>
				Gender:
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other<br><br>
				<button class="submit-btn" type="submit" name="signup-submit">Sign Up</button>
			</form>
			
			<form id="login" class="input-grp" action="includes/login.inc.php" method="POST">
				<input class="input-fd" type="text" name="mailuid" placeholder="Username/Email"><br>
				<input class="input-fd" type="Password" name="pwd" placeholder="Password"><br>
				<button class="submit-btn" type="submit" name="login-submit">Log In</button><br>
				<form action="logout.inc.php" method="POST">
				
				</form>
			</form>
				
		</div>
			
	</div>

		<script>
			var x = document.getElementById("signup");
			var y = document.getElementById("login");
			var z = document.getElementById("btn");

			function login(){
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}

			function signup(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0";
			}
		</script>
</main>	
