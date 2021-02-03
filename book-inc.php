<?php session_start();
 include "includes/dbh.inc.php";?>
<?php

if(isset($_POST['submit'])){

   if(!isset($_SESSION['name'])){
      header("Location:includes/signup.inc.php?");
      exit();
      } else  {
        $user = $_SESSION['name'];
       $username = $_SESSION['mailuid'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];


      
      header("Location:book_confirm.php?checkin=$checkin&checkout=$checkout&username=$username");
      exit();
   }

       /*


      $sql = "SELECT sno FROM booking where checkin = '$checkin' and checkout = '$checkout' and user = '$user' ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {

         header("Location:book.php?reserve=done");
         exit();

      }else {

         */

         
        
   }



?>