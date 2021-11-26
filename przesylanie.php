<?php
include "db_connection.php";
 
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 
 $insert = mysqli_query($db, "INSERT INTO `wiadomosci`(`nazwa`, `email`, `message`) VALUES ('$name', '$email', '$message')");
 
 if(!$insert)
 {
 echo mysqli_error();
 }
 else{
 echo "Twoja wiadomość została wysłana";
 }
 
 mysqli_close($db);
}
?>