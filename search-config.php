<?php

if(isset($_POST["search"])){
    
    if(isset($_POST['search_place'])){
         $search_place = $_POST['search_place'];

            if($search_place == "Dhaka"){
                header('Location:dhaka.php');
                exit();
            }else if($search_place == "Chittagong"){
                header('Location:chittagong.php');
                exit();
            }else if($search_place == "Khulna"){
                header('Location:khulna.php');
                exit();
            }else if($search_place == "Barishal"){
                header('Location:barishal.php');
                exit();
            }else if($search_place == "Mymensingh"){
                header('Location:mymensingh.php');
                exit();
            }else if($search_place == "Rajshahi"){
                header('Location:rajshahi.php');
                exit();
            }else if($search_place == "Rangpur"){
                header('Location:rangpur.php');
                exit();
            }else if($search_place == "Sylhet"){
                header('Location:sylhet.php');
                exit();
            }
    }
}

?>