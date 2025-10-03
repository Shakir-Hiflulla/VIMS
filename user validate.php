<?php
    session_start();
    require 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            
            $row=$result->fetch_assoc();
            $_SESSION['id']=$row['user_id'];
            $_SESSION['uname']=$username;
            header("Location:home.php");
        } else {
            header("Location:user login.php?Invalid username or password");
        }
    }
$con->close();
?>