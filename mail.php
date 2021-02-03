<?php
if(isset($_POST['sent_mail'])){
  

    $to = "web.amex19@gmail.com";
$subject = $_POST["name"];
$txt = $_POST["message"];
$headers = "From: " . $_POST["email"] ;

//mail($to,$subject,$txt,$headers);

if(mail($to,$subject,$txt,$headers) == true){
    echo "sent";
}

}


?>
