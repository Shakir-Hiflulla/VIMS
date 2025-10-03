<?php
    session_start();
    require 'config.php';
    if(isset($_POST['submit'])){
        $pol_no=$_POST['pol_no'];
        $loc=$_POST['location'];
        $date=$_POST['date'];
        $details=$_POST['details'];
        $day="20".date('y')."-".date('m')."-".date('d');
        $id=$_SESSION['id'];
        
        $sql ="SELECT * FROM policy WHERE policy_id=$pol_no";
        $result= $con->query($sql);
        if ($result->num_rows > 0) {
            $sql2="INSERT INTO claim VALUES ('','$date','$day','$loc','$details','Pending',$pol_no,$id)";
            if($con->query($sql2))
            {
                echo"Successful";
                header("Location:claims.php");
            }
            else
            {
                echo"Error".$con->error;
            }

            $con->close();
        }
        else{
            header("Location:apply claims.php?error invalid policy");
        }
    }
    if(isset($_POST['confirm'])){
        $status=$_POST['status'];
        $cid=$_POST['c_id'];

        $sql1="UPDATE claim SET status='$status' WHERE claim_id=$cid";
        if($con->query($sql1)){
            header("Location:claims.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    


        $con->close();
    }
?>