<?php
    session_start();
    require 'config.php';
    if(isset($_POST['confirm'])){
        $day="20".date('y')."-".date('m')."-".date('d');
        $id=$_SESSION['id'];
        $amount=$_SESSION['amount'];
        $method=$_POST['method'];

        $sql2="INSERT INTO payment VALUES ('','$day','$amount','$method','Insurance registration','$id')";
        if($con->query($sql2)){

            header("Location:home.php");
        }
        else
        {
            echo"Error".$con->error;
        }

        $con->close();
        
    }

?>