<?php
session_start();

include "admin-header.php";
include "../includes/dbh.inc.php";
?>


<?php include "sidenav.php" ;?>


<div class="admin-content-area">



<div class="admin-nav">
    
		<div class="container">
			<div class="row ">

            <div class="col-lg-5">
					<div class="heading  ">
                    <p><?php echo date("Y/m/d")?></p>
					</div>
                </div>
                
                <div class="col-lg-4">
					<div class="heading logo ">
						<a href="../index.php">Travel---</a>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="heading">
                        <h2>Admin Panel </h2>
					</div>					
				</div>

				
			</div>

			

		</div>
		</div>

<div class="admin-form container pt-5 mt-5">


<?php

if(isset($_POST['pass'])){

    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $con_pass = $_POST['con_pass'];
    
    if($new_pass != $con_pass){
        echo "<p class='alert alert-success'>Password Not Matched !</p>";
    }
        else{

    $sql = "SELECT * from admin WHERE admin ='" . $_SESSION["admin"] . "'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if ($old_pass == $row["pass"]) {

        $sql1="UPDATE admin set pass=$new_pass WHERE admin='" . $_SESSION["admin"] . "'";
            if(mysqli_query($conn,$sql1 )){
                echo "<p class='alert alert-success'>Password Changed</p>";
            } else {
                echo "<p class='alert alert-danger'>Password Not Updated!</p>";
            }
    } else echo "<p class='alert alert-success'>Wrong Password</p>";

    }
}
?>

<form method="post" action="">

<div class="form-group">
    <label >Old Password</label>
    <input type="text" class="form-control"  placeholder="Old Password" name="old_pass">
</div>

<div class="form-group">
    <label >New Password</label>
    <input type="text" class="form-control"  placeholder="New Password" name="new_pass">
</div>

<div class="form-group">
    <label >Confirm Password</label>
    <input type="text" class="form-control"  placeholder="Confirm Password" name="con_pass">
</div>

<button type="submit" class="btn btn-admin" name="pass">Submit</button>

</form>
</div>