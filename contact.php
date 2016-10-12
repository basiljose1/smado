<?php 

    $to = "sharewithjishnu@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "site enqury";
    $message = $_POST['message'];
    

    mail($to,$subject,$message,$from);
   echo "<script>
alert('Email has been sent!');
window.location.href='index.html';
</script>";

?>
           
   
    