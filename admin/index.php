
<?php
session_start();
include "admin-header.php";
include "../includes/dbh.inc.php";

if (isset($_POST["submit"]) ) {
    $admin = $_POST["admin"] ; 
    $pass = $_POST["pass"] ; 

    $sql = "SELECT * FROM admin where admin = '$admin' and pass = '$pass'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
		$_SESSION['admin'] = $admin;
		header("Location:admin.php?");
            exit();
    } else {
		header("Location:index.php?login=failed");
		exit();
    }
}

?>
	
<div class="admin-nav">
		<div class="container">
			<div class="row ">
				<div class="col-lg-10">
					<div class="heading">
						<h2>Admin Panel </h2>
					</div>					
				</div>

				<div class="col-lg-2">
					<div class="heading logo ">
						<a href="../index.php">Travel---</a>
					</div>
				</div>
			</div>

			

		</div>
		</div>

		<?php
		

		if (isset($_GET["login"])) {
			if(isset($_GET["login"]) == "failed") {
			echo '<p class="alert alert-danger">Admin Login Failed</p>';
			}
		}
		
		?>

		<div class="admin-form container pt-5 mt-5">

				<form method="post" action="">

				<div class="form-group">
					<label >Admin ID</label>
					<input type="text" class="form-control"  placeholder="Enter Admin Id" name="admin">
				</div>

				<div class="form-group">
					<label >Password</label>
					<input type="text" class="form-control"  placeholder="Password" name="pass">
				</div>

				<button type="submit" class="btn btn-admin" name="submit">Submit</button>
				
				</form>
		</div>
</body>
</html>
