<?php include "header.php"?>


<?php

if (isset($_GET["reserve"])) {
    if ($_GET["reserve"] == "done") {
        echo '<div class="alert"><span class="closebtn" onclick="this.parentElement.styledisplay="none";">&times;</span> Reservation Already created ! Try another date ! </div>';

    }
}

if (isset($_GET["confirm"])) {
    if ($_GET["confirm"] == "done") {
        echo '<div class="alert"><span class="closebtn" onclick="this.parentElement.styledisplay="none";">&times;</span> Your Booking has been confirmed ! </div>';

    }
}
?>

<style>
.book-area{
    height: 100vh;
    width: 100%;
    background-image: linear-gradient( rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)), url(img/p3.jpg);
    background-repeat: no-repeat;
    background-size: cover; 
    position: relative;
}

.book-title {
    color:  #fff;
  padding: 15px;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
}

.book-title h1{
    font-weight:bold;
    font-size: 4rem;
    text-transform: capitalize;
    text-align: center;
}

.book-box{
    
    
    float: left;
    
}
.book-button{
    border: solid 2px rgba(0, 26, 0, 0.3) ;
    background-color: rgba(0, 26, 0 , 0.3);  
    color: white;
    width: 150px;
    margin: 20px;
    font-size: 25px;
    padding: 20px;
    
    color: white;
}
.book-button-1{
    width: 200px;
    height: 100px;
}
.book-button:hover{
    background-color: #00cc00;
    border: solid 2px #00cc00 ;
}

.book-main-area{
    width: 90%;
    margin: 30px auto;

}
.book-area-col{
    width: 49%;
    background-color: rgba(0, 26, 0);
    float: left;
    height:300px;
    border: solid 3px #fff;
    position: relative;
}
.book-area-col img{
    width: 100%;
    height:100%;
}
.book-area-text{
    position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  color:  #fff;
  padding: 15px;
  line-height: 30px;
}
.book-area-col h4{
  font-size: 2rem;
}
.book-area-col p{
  margin-top: 20px;
}

/* alert box styling **/

/* The alert message box */
.alert {
  padding: 20px;
  background-color: #00cc00; /* Red */
  color: white;
  font-size: 22px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>

<?php ?>


<div class="book-area">
    <div class="book-title">
        <h1>welcome to our hotel</h1>

    <form action="book-inc.php" method="post">

    <div class="book-box"><div class="book-button"><label for="">Check-in</label> <input type="date" name="checkin"></div></div>
    <div class="book-box"><div class="book-button"><label for="">Check-out</label> <input type="date" name="checkout"></div></div>
    <div class="book-box"><button type="submit" name="submit" class="book-button book-button-1">Make Reservation</button></div>

    </form>
    </div>

</div>

<!--

        <div class="book-main-area">

                <div class="book-area-col">
                   <div class="book-area-text">
                   <h4>Great Services</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, necessitatibus officiis. Fugit beatae reprehenderit repudiandae odit doloribus cum dolorum tempore.</p>
                   </div>
                </div>
                
                <div class="book-area-col"><img src="img/p10.jpg" alt=""></div>
                
                <div class="book-area-col"><img src="img/p11.jpg" alt=""></div>
                
                <div class="book-area-col">
                   <div class="book-area-text">
                   <h4>Professional Staffs</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias impedit voluptatem temporibus et architecto praesentium odit, magni ducimus repudiandae commodi.</p>
                   </div>
                </div>
        </div>
    
-->

<?php 

include "footer.php";
?>