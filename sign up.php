<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/commonStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("menu_cont");
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        }

        function validateLog() {
            var pswd = document.getElementById("pswd").value;
            var cnpswd = document.getElementById("cnpswd").value;

            if (pswd == cnpswd) {
            }
            else {
                alert('passwords does not match');
                event.preventDefault();
            }
        }

    </script>
    <header>    
    <?php
    if(isset($_SESSION['id'])){
        echo '<nav id="nav_bar">
        <img src="image/logo.jpg" alt="Logo" id="logo">
        <ul style="margin-left: 5vh;">
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="policy.php">My Policy</a></li>
            <li><a href="claims.php">Claims</a></li>
            <li><a href="Payment.php">Payments</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <a href="user_account.php"><img src="image/profile.jpeg" alt="profile" id="profile_pic"></a>
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <div id="menu_iconn">
            <p><i class="fa-solid fa-bars" onclick="toggleDropdown()"></i></p>
        </div>
    </nav>';
    }
    else if(isset($_SESSION['staff'])){
        if ($_SESSION['staff']==1){
            echo '<nav id="nav_bar">
            <img src="image/logo.jpg" alt="Logo" id="logo">
            <ul style="margin-left: 5vh;">
                <li><a href="home.php">Home</a></li>
                <li><a href="staff.php">Staff Details</a></li>
                <li><a href="customer.php">Customers</a></li>
            </ul>
            <form method="post" action="register ins.php">
            <button name="logout">Logout</button>
            </form>
            <div id="menu_iconn">
                <p><i class="fa-solid fa-bars" onclick="toggleDropdown()"></i></p>
            </div>
        </nav>';
        }elseif($_SESSION['staff']==2){
            echo '<nav id="nav_bar">
        <img src="image/logo.jpg" alt="Logo" id="logo">
        <ul style="margin-left: 5vh;">
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="policy.php">Policy</a></li>
            <li><a href="claims.php">Claims</a></li>
            <li><a href="customer.php">Customers</a></li>
            <li><a href="faq.php">FAQs</a></li>
        </ul>
        <form method="post" action="register ins.php">
        <button name="logout">Logout</button>
        </form>
        <div id="menu_iconn">
            <p><i class="fa-solid fa-bars" onclick="toggleDropdown()"></i></p>
        </div>
    </nav>';

        }elseif($_SESSION['staff']==3){
            echo '<nav id="nav_bar">
            <img src="image/logo.jpg" alt="Logo" id="logo">
            <ul >
                <li><a href="home.php">Home</a></li>
                <li><a href="faq.php">Customer Quotes</a></li>
            </ul>
            <form method="post" action="register ins.php">
            <button name="logout">Logout</button>
            </form>
            <div id="menu_iconn">
                <p><i class="fa-solid fa-bars" onclick="toggleDropdown()"></i></p>
            </div>
        </nav>';
        }
        
    }else{
        echo '<nav id="nav_bar">
        <img src="image/logo.jpg" alt="Logo" id="logo">
        <ul style="margin-left: 5vh;">
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <img src="image/profile.jpeg" alt="profile" id="profile_pic">
        <div id="menu_iconn">
            <p><i class="fa-solid fa-bars" onclick="toggleDropdown()"></i></p>
        </div>
    </nav>';
    }        

    ?>
        
        
    <div id="menu_cont">
    <h2>AutoGuard</h2>
    <?php
    if(isset($_SESSION['id'])){
        echo '
        <a href="user_account.php"><img src="image/profile.jpeg" alt="profile" id="profile_pic"></a>
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="policy.php">My Policy</a></li>
            <li><a href="claims.php">Claims</a></li>
            <li><a href="Payment.php">Payments</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>';
    }
    else if(isset($_SESSION['staff'])){
        if ($_SESSION['staff']==1){
            echo '
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <ul >
            <li><a href="home.php">Home</a></li>
            <li><a href="staff.php">Staff Details</a></li>
            <li><a href="customer.php">Customers</a></li>
        </ul>';
        }elseif($_SESSION['staff']==2){
            echo '
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <ul style="margin-left: 5vh;">
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="policy.php">Policy</a></li>
            <li><a href="claims.php">Claims</a></li>
            <li><a href="customer.php">Customers</a></li>
            <li><a href="faq.php">FAQs</a></li>
        </ul>';

        }elseif($_SESSION['staff']==3){
            echo '
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <ul >
            <li><a href="home.php">Home</a></li>
            <li><a href="faq.php">Customer Quotes</a></li>
        </ul>';
        }
        
    }else{
        echo '
        <img src="image/profile.jpeg" alt="profile" id="profile_pic">
        <form method="post" action="user.php">
        <button name="logout">Logout</button>
        </form>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="insurance.php">Insurance Product</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>';
    }        
    ?>
    </div>
        <div class="container_1">
            <input type="text" name="search_engine" placeholder="Serach Here">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="line"></div>
    </header>
    <main>
        <?php
        if(isset($_SESSION['staff'])){
            if(isset($_POST['edit'])){
                echo '<div class="SignUp_div">
            <form method="post" action="staff validate.php">
                <h1>Enter New details Details</h1>
                <input type="hidden" name="id" value="'.$_POST['id'].'">
                <label for="f_name">First Name </label><br>
                <input type="text" id="f_name" name="f_name" value="'.$_POST['f_name'].'" required><br>
                <label for="l_name">Last Name </label><br>
                <input type="text" id="l_name" name="l_name" value="'.$_POST['l_name'].'" required><br>
                <label for="email">Email </label><br>
                <input type="email" id="email" name="email" value="'.$_POST['email'].'" required><br>
                <label for="phone">Phone No </label><br>
                <input type="tel" id="phone" name="phone" value="'.$_POST['phone'].'" required><br>
                <label for="username">Username </label><br>
                <input type="text" id="username" name="username" value="'.$_POST['username'].'" required><br>
                <label for="password">Password </label><br>
                <input type="text" id="password" name="password" value="'.$_POST['password'].'" required><br>
                <input type="submit" value="Confirm" name="edit"><br>
            </form>
            </div>';
            }
            if(isset($_POST['ag-edit'])){
                echo '<div class="SignUp_div">
            <form method="post" action="user.php">
                <h1>Enter New details Details</h1>
                <input type="hidden" name="id" value="'.$_POST['id'].'">
                <label for="f_name">First Name </label><br>
                <input type="text" id="f_name" name="f_name" value="'.$_POST['f_name'].'" required><br>
                <label for="l_name">Last Name </label><br>
                <input type="text" id="l_name" name="l_name" value="'.$_POST['l_name'].'" required><br>
                <label for="email">Email </label><br>
                <input type="email" id="email" name="email" value="'.$_POST['email'].'" required><br>
                <label for="phone">Phone No </label><br>
                <input type="tel" id="phone" name="phone" value="'.$_POST['phone'].'" required><br>
                <label for="username">Username </label><br>
                <input type="text" id="username" name="username" value="'.$_POST['username'].'" required><br>
                <label for="password">Password </label><br>
                <input type="text" id="password" name="password" value="'.$_POST['password'].'" required><br>
                <input type="submit" value="Confirm" name="ag-edit"><br>
            </form>
            </div>';
            }

            if(isset($_POST['ad-edit'])){
                echo '<div class="SignUp_div">
            <form method="post" action="user.php">
                <h1>Enter New Details</h1>
                <input type="hidden" name="id" value="'.$_POST['id'].'">
                <label for="f_name">First Name </label><br>
                <input type="text" id="f_name" name="f_name" value="'.$_POST['f_name'].'" required><br>
                <label for="l_name">Last Name </label><br>
                <input type="text" id="l_name" name="l_name" value="'.$_POST['l_name'].'" required><br>
                <label for="email">Email </label><br>
                <input type="email" id="email" name="email" value="'.$_POST['email'].'" required><br>
                <label for="phone">Phone No </label><br>
                <input type="tel" id="phone" name="phone" value="'.$_POST['phone'].'" required><br>
                <label for="username">Username </label><br>
                <input type="text" id="username" name="username" value="'.$_POST['username'].'" required><br>
                <label for="password">Password </label><br>
                <input type="text" id="password" name="password" value="'.$_POST['password'].'" required><br>
                <input type="submit" value="Confirm" name="ad-edit"><br>
            </form>
            </div>';
            }

        }elseif(isset($_POST['edit'])){
            echo '<div class="SignUp_div">
            <form method="post" action="user.php">
                <h1>Enter New Details</h1>
                <input type="hidden" name="id" value="'.$_POST['id'].'">
                <label for="f_name">First Name </label><br>
                <input type="text" id="f_name" name="f_name" value="'.$_POST['f_name'].'" required><br>
                <label for="l_name">Last Name </label><br>
                <input type="text" id="l_name" name="l_name" value="'.$_POST['l_name'].'" required><br>
                <label for="dob">Date of Birth </label><br>
                <input type="date" id="dob" name="dob" value="'.$_POST['dob'].'" required><br>
                <label for="add">Address</label><br>
                <input type="text" id="add" name="address" value="'.$_POST['address'].'" required><br>
                <label for="email">Email </label><br>
                <input type="email" id="email" name="email" value="'.$_POST['email'].'" required><br>
                <label for="phone">Phone No </label><br>
                <input type="tel" id="phone" name="phone" value="'.$_POST['phone'].'" required><br>
                <label for="username">Username </label><br>
                <input type="text" id="username" name="username" value="'.$_POST['username'].'" required><br>
                <label for="password">Password </label><br>
                <input type="text" id="password" name="password" value="'.$_POST['password'].'" required><br>
                <input type="submit" value="Confirm" name="ed-signup"><br>
            </form>
        </div>';
        }
        else{
            echo '<div class="SignUp_div">
            <form method="post" action="user.php" onsubmit="validateLog()">
                <h1>Enter Your Details</h1>
                <input type="text" name="f_name" placeholder="First Name" required><br>
                <input type="text" name="l_name" placeholder="Last Name" required><br>
                <input type="date" name="dob" placeholder="Date of Birth" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="tel" name="phone" placeholder="Phone No" required><br>
                <input type="text" name="address" placeholder="Address" required><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" id="pswd" name="password" placeholder="Password" required><br>
                <input type="password" id="cnpswd" name="re-password" placeholder="Re-Enter Password" required><br>
                <input type="submit" value="Sign Up" name="signup"><br>
            </form>
            <hr>
            <p>Already have an account?<a href="user login.php"> Log In</a></p>
        </div>';
        }
        ?>
        <br><br><br><br><br><br><br><br><br><br>
        
    </main>
    <footer>
        <div class="footer_div">
            <img src="image/logo.jpg" alt="Logo">
            <ul>
                <li><u>COMPANY</u></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <ul>
                <li><u>SUPPORT</u></li>
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="insurance.php">Quotes</a></li>
            </ul>
        </div>
        <div class="copy_">
            <p>&copy; 2024 All rights reseved</p>
            <ul>
                <li>Follow us: </li>
                <li><a href="#"><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></a></i></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></a></i></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></a></i></li>
            </ul>
        </div>
    </footer>
</body>

</html>