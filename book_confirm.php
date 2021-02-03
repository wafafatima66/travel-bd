

<?php

include "header.php" ; 
include "includes/dbh.inc.php";



if (isset($_GET["checkin"]) && isset($_GET["username"] )&& isset( $_GET["checkout"] )) {
    $checkin = $_GET["checkin"] ; 
    $checkout = $_GET["checkout"] ; 
    $username = $_GET["username"] ; 

    $sql = "SELECT * FROM users where User_name = '$username' ";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
          $user = $row["Name"];
          $email = $row["Email"];
          $age = $row["Age"];
          $phone = $row["Phone"];
          $gender = $row["Gender"];
      }
    } else {
        echo "no data";
    }
}

if(isset($_POST['submit'])){

    $checkin = $_POST["checkin"] ; 
    $checkout = $_POST["checkout"] ; 
    $username = $_POST["username"] ; 
    $rooms = $_POST["rooms"] ; 
    $room_category = $_POST["room_category"] ; 

         $sql = "INSERT INTO booking (user, checkin, checkout,rooms,room_category)
         VALUES ('$username', '$checkin', '$checkout', '$rooms' , '$room_category')";
         
         if (mysqli_query($conn, $sql)) {
            header("Location:book.php?confirm=done");
            exit();
         } else {
             echo "not created" ; 
         }
         
}

?>





<style>
.book-confirm-area{
    width:100%;
    height:100vh;
    background-color: #7E6046;
}
.booking-form-img{
    background-image: linear-gradient( rgba(49, 49, 49, 0.5), rgba(49, 49, 49, 0.5)), url(img/p6.jpg);
   background-repeat: no-repeat;
    background-size: cover; 
    width:60%;
    height:100% ; 
    float:left;
    position:relative ; 

}
.book-confirm-title {
    color:  #fff;
  padding: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  font-weight:bold;
    font-size: 3rem;
    text-transform: capitalize;
    text-align: center;
}

.booking-form{
    width:30%;
     float:left;
     padding:30px ; 
}
input[type=text],input[type=date], select {
  width: 50%;
  padding: 12px 20px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #00cc00;
  color: white;
  padding: 12px 16px;
  margin: 5px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
label {
  display: inline-block;
    padding-top: 5px;
    text-align: right;
    width: 140px;
    margin-right:20px; 
    color: #fff;
}
input[type=submit]:hover {
  background-color: #00cc00;
}
</style>

<div class="book-confirm-area">
<div class="booking-form-img">

<h1 class="book-confirm-title">CONFIRM YOUR <span style="font-style:italic; color:#00cc00 ;float:right; " >Booking</span></h1>

</div>

<div class="booking-form">

<form action="" method="post">
    <label>Name</label>
    <input type="text" value="<?php echo $user?>" name="user" >

    <label >User Name</label>
    <input type="text" value="<?php echo $username?>" name="username">

    <label >Email</label>
    <input type="text" value="<?php echo $email?>">

    <label >Phone</label>
    <input type="text" value="<?php echo $phone?>">

    <label >Gender</label>
    <input type="text" value="<?php echo $gender?>">

    <label >No Of Rooms</label>
    <input type="text" name="rooms" >

    <label>Room Category</label>
    <select  name="room_category">
      <option value="deluxe">Deluxe</option>
      <option value="single">Single</option>
      <option value="double">Double</option>
    </select>

    <label >Check-in </label>
    <input type="date"  value="<?php echo $checkin?>" name="checkin">

    <label >Check-out</label>
    <input type="date" value="<?php echo $checkout?>" name="checkout" >
  
    <input type="submit" value="Submit" name="submit">
  </form>

</div>
</div>

<?php

include "footer.php" ; 
?>

