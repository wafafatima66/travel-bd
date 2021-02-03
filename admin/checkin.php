<?php include "admin-header.php";
include "../includes/dbh.inc.php";
?>

<style>

  
</style>

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


<div class="container mt-3 pt-3">

<h2>Check-In List</h2>
        <table class="table table-bordered pt-3 mt-3 ">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">User</th>
            <th scope="col">Check-In</th>
            <th scope="col">No Of Rooms</th>
            <th scope="col" >Room Type</th>
            </tr>
        </thead>
        
        <?php

$date = date("Y-m-d"); 

        $showdataquery="SELECT * FROM booking where checkin = '$date' ";
        $rundataquery= $conn ->query($showdataquery);

        if($rundataquery==true) {
            while($mydata=$rundataquery->fetch_assoc()){ 
                ?>
            
                <tbody>
            <tr>
            <td><?php echo $mydata["sno"];?></td>
            <td><?php echo $mydata["user"];?></td>
            <td><?php echo $mydata["checkin"];?></td>
            <td><?php echo $mydata["rooms"];?></td>
            <td><?php echo $mydata["room_category"];?></td>
            </tr>
            </tbody>
           
    
    <?php }}  ?>
    </table>
    
    </div>
    </div>
    </div>