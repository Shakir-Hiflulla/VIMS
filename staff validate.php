<?php
    session_start();
    require 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role=$_POST['role'];

        if($role=='admin'){
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION['staff']=1;
                header("Location: home.php");
            
            } else {
                echo "Invalid username or password";
                header("Location:user login.php");
            }


        }elseif($role=='manager'){
            $sql = "SELECT * FROM manager WHERE username = '$username' AND password = '$password'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION['staff']=2;
                echo "Login successful";
                header("Location: home.php");
            } else {
                echo "Invalid username or password";
                header("Location:user login.php");
            }


        }else{
                $sql = "SELECT * FROM agent WHERE username = '$username' AND password = '$password'";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    $_SESSION['staff']=3;
                    echo "Login successful";
                    header("Location: home.php");
                } else {
                    echo "Invalid username or password";
                    header("Location:user login.php");
                }
        }
    }
    if(isset($_POST['delete'])){
        $delete=$_POST['dlt'];

        $sql1="DELETE FROM manager WHERE man_id=$delete";
        if($con->query($sql1)){
            header("Location:staff.php");  
        }
        else
        {
        echo"Error".$con->error;
        }   
    }
    if(isset($_POST['edit'])){
        $id= $_POST['id'];
        $fname= $_POST['f_name'];
        $lname= $_POST['l_name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        $sql1="UPDATE manager SET f_name='$fname',l_name='$lname',contact_no=$phone,email='$email',username='$username',password='$password' WHERE man_id=$id";
        if($con->query($sql1)){
            header("Location:staff.php");  
        }
        else
        {
        echo"Error".$con->error;
        }    
    }
    
    $con->close();
    ?> 