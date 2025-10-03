<?php
session_start();
require 'config.php';

if(isset($_POST['signup'])){
    $f_name=$_POST["f_name"];
    $l_name=$_POST["l_name"];
    $dob=$_POST["dob"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $conpass=$_POST["re-password"];
    $phone=$_POST['phone'];
    
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $con->query($sql);
    
    if($result->num_rows > 0) {
        header("Location: sign up.php?error username alredy exist");
    }
    else{
        $sql2="INSERT INTO user VALUES('','$f_name','$l_name','$dob','$email','$phone','$address','$username','$password')";
    
        if($con->query($sql2))
        {
        echo"Successful";
        header("Location:user login.php");
        }
        else
        {
        echo"Error".$con->error;
        }
    
        $con->close();
    
        }
}
if(isset($_POST['ed-signup'])){
    $id=$_POST['id'];
    $f_name=$_POST["f_name"];
    $l_name=$_POST["l_name"];
    $dob=$_POST["dob"];
    $email=$_POST["email"];
    $phone=$_POST['phone'];
    $address=$_POST["address"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    
    $sql = "SELECT * FROM user WHERE NOT user_id=$id AND username = '$username'";
    $result = $con->query($sql);
    
    if($result->num_rows > 0) {
        header("Location: sign up.php?error username alredy exist");
    }
    else{
        $sql2="UPDATE user SET f_name='$f_name',l_name='$l_name',dob='$dob',email='$email',phone=$phone,address='$address',username='$username',password='$password' WHERE user_id=$id";
    
        if($con->query($sql2))
        {
        echo"Successful";
        header("Location:user_account.php");
        }
        else
        {
        echo"Error".$con->error;
        }
    
        $con->close();
    
        }
}

    if(isset($_POST['delete'])){
        $id=$_POST['dlt'];
        
        $sql1="DELETE FROM policy WHERE user_id=$id";
        if($con->query($sql1)){
            $sql3="DELETE FROM payment WHERE user_id=$id";
            if($con->query($sql3)){
                $sql="DELETE FROM user WHERE user_id=$id";
                if($con->query($sql)){
                    $sql2="DELETE FROM claim WHERE user_id=$id";
                    if($con->query($sql2)){
                        header("Location:customer.php");
                    }
                }
            }
        }
        else
        {
        echo"Error".$con->error;
        }    

        $con->close();
        
    }
    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION['id']);
        header("location:home.php");
    }
    if(isset($_POST['ag-edit'])){
        $id= $_POST['id'];
        $fname= $_POST['f_name'];
        $lname= $_POST['l_name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        $sql1="UPDATE agent SET f_name='$fname',l_name='$lname',contact_no=$phone,email='$email',username='$username',password='$password' WHERE agent_id=$id";
        if($con->query($sql1)){
            header("Location:staff.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    
    }
    if(isset($_POST['ad-edit'])){
        $id= $_POST['id'];
        $fname= $_POST['f_name'];
        $lname= $_POST['l_name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        $sql2="UPDATE admin SET f_name='$fname',l_name='$lname',contact_no=$phone,email='$email',username='$username',password='$password' WHERE admin_id=$id";
        if($con->query($sql2)){
            header("Location:staff.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    
    }

?>

