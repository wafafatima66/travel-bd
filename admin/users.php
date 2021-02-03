<?php include "admin-header.php";
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


<div class="container mt-3 pt-3">

<h2>Users</h2>
        <table class="table table-bordered pt-3 mt-3 ">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">User name</th>
            <th scope="col">Phone</th>
            <th scope="col" >Email</th>
            <th scope="col" >Gender</th>
            </tr>
        </thead>
        
        <?php
        $showdataquery="SELECT * FROM users";
        $rundataquery= $conn ->query($showdataquery);

        if($rundataquery==true) {
            while($mydata=$rundataquery->fetch_assoc()){ 
                ?>
            
                <tbody>
            <tr>
            <td><?php echo $mydata["User_id"];?></td>
            <td><?php echo $mydata["Name"];?></td>
            <td><?php echo $mydata["Age"];?></td>
            <td><?php echo $mydata["User_name"];?></td>
            <td><?php echo $mydata["Phone"];?></td>
            <td><?php echo $mydata["Email"];?></td>
            <td><?php echo $mydata["Gender"];?></td>
            </tr>
            </tbody>
           
    
    <?php }}  ?>
    </table>
    
    </div>
    </div>
    </div>