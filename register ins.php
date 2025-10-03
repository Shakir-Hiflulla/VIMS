<?php
    session_start();
    require 'config.php';
    if(isset($_POST['register'])){
        $ins_no=$_POST['ins_no'];
        $vhcl_t=$_POST['vehicle_t'];
        $vhcl_no=$_POST['vhcl_no'];
        $day="20".date('y')."-".date('m')."-".date('d');
        $id=$_SESSION['id'];
        
        $sql ="SELECT * FROM insurance WHERE ins_id=$ins_no";
        $result= $con->query($sql);
        if ($result->num_rows > 0) {
            $row=$result->fetch_assoc();
            $_SESSION['amount']=$row['amount'];
            $details=$row['details'];
            $type=$row['type'];
        }

        $sql2="INSERT INTO policy VALUES('','$type','$day','$vhcl_no','$details','$id')";
        if($con->query($sql2))
        {
        echo"Successful";
        header("Location:payment form.php");
        }
        else
        {
        echo"Error".$con->error;
        }

        $con->close();


        }
    if(isset($_POST['edit'])){
        $ins_no1=$_POST['ins_no'];
        $vhcl_type=$_POST['vhcl_type'];
        $ins_type=$_POST['ins_type'];
        $details=$_POST['details'];
        $amount=$_POST['amount'];

        $sql1="UPDATE insurance SET type='$ins_type',details='$details',vehicle_type='$vhcl_type',amount=$amount WHERE ins_id=$ins_no1";
        if($con->query($sql1)){
            header("Location:insurance.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    


        $con->close();
    }
    if(isset($_POST['add'])){
        $vhcl_type=$_POST['vhcl_type'];
        $ins_type=$_POST['ins_type'];
        $details=$_POST['details'];
        $amount=$_POST['amount'];

        $sql1="INSERT INTO insurance VALUES ('','$ins_type','$details','$vhcl_type',$amount)";
        if($con->query($sql1)){
            header("Location:insurance.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    

        $con->close();

    }
    if(isset($_POST['delete'])){
        $delete=$_POST['dlt'];

        $sql1="DELETE FROM insurance WHERE ins_id=$delete";
        if($con->query($sql1)){
            header("Location:insurance.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    

        $con->close();

    }
    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION['staff']);
        header("location:home.php");
    }
    
?>