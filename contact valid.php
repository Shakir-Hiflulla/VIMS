<?php
session_start();

require 'config.php';

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $question=$_POST['message'];

    $sql2="INSERT INTO faqs VALUES ('','$question','','$email')";
    if($con->query($sql2)){

        header("Location:home.php");
    }
    else
    {
        echo"Error".$con->error;
    }


    
}

if(isset($_POST['response'])){
    
    $id=$_POST['faq_id'];
    $anwr=$_POST['answer'];

    $sql2="UPDATE faqs SET response='$anwr' WHERE faq_id=$id";
    if($con->query($sql2)){
        
        header("Location:faq.php");
    }
    else
    {
        echo"Error".$con->error;
    }


    
}
if(isset($_POST['help'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="INSERT INTO quote VALUES ('','$email','$name','$message','Not Replied')";
    if($con->query($sql)){
        header("Location:insurance.php");
    }
    else
    {
        echo"Error".$con->error;
    }

}
$con->close();

?>