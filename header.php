<?php session_start(); 


if(!isset($_SESSION['name'])){
$user = "" ; 
} else  {
  $user = $_SESSION['name'] ; 
}

?>

<?php include "link.php" ; ?>



<div class="top">
        <div class="top-logo">
          <h1>Travel---</h1>
        </div>
        <a href="#menu" class="show-menu">=</a>
        <div class="menu" id="menu">
         <ul>

             <li><a href="index.php">Home</a> </li>
             <li><a href="about.php">About</a> </li>
             <li><a href="#service">Agency</a> </li>
             <li><a href="blog.php">Blogs</a> </li>
             <li><a href="book.php">Book</a> </li>
             <li><a href="signup.php">Signup/Login</a> </li>
             <li>
               <a  href="includes/logout.inc.php"class="tooltip"><i class="fas fa-user"></i><?php echo $user;?><span class="tooltiptext">Logout</span>
              </a>
              </li>
    
         </ul>
         <a href="#" class=hide-menu>+</a>
     </div>
      </div>