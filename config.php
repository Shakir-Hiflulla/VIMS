<?php 

$con=new mysqli("localhost","root","","vims");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}


?>