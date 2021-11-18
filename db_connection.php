<?php
 
$db = mysqli_connect("localhost","adminek","henio","bazunia");
 
if(!$db)
{
 die("Connection failed: " . mysqli_connect_error());
}
 
?>