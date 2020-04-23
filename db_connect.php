<?php
    
   $conn = mysqli_connect('localhost','Admin','12345','online-clothes-shopping');
   if(!$conn)
   {
       
       echo 'Connection error: '.mysqli_connect_error();
   }
  
?>
