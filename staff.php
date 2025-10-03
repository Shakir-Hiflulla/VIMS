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
        <a href="user login.php"><img src="image/profile.jpeg" alt="profile" id="profile_pic"></a>
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
        <a href="user login.php"><img src="image/profile.jpeg" alt="profile" id="profile_pic"></a>
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
        <div class="agent_div">
            <h1>Staff Details</h1>
            <h2>Manager Details</h2>
            <?php
                require 'config.php';
                if(isset($_SESSION['staff'])){
                $sql = "SELECT * FROM manager ";
                $result = $con->query($sql);
                echo '<table id="manager_table">
                <tr>
                    <th>Manager ID</th>
                    <th>Name</th>
                    <th>Contacct No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th></tr>';

                if ($result->num_rows > 0){
                   
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo '<td>'.$row['man_id'].'</td><td>'.$row['f_name']." ".$row['l_name'].'</td><td>'.$row['contact_no'].'</td><td>'.$row['email'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>
                        <form method="post" action="sign up.php">
                            <input type="hidden" name="id" value="'.$row['man_id'].'">
                            <input type="hidden" name="f_name" value="'.$row['f_name'].'">
                            <input type="hidden" name="l_name" value="'.$row['l_name'].'">
                            <input type="hidden" name="phone" value="'.$row['contact_no'].'">
                            <input type="hidden" name="email" value="'.$row['email'].'">
                            <input type="hidden" name="username" value="'.$row['username'].'">
                            <input type="hidden" name="password" value="'.$row['password'].'">
                            <input type="submit" name="edit" value="Edit">
                        </form>
                        <form method="post" action="staff validate.php">
                            <input type="hidden" name="dlt" value="'.$row['man_id'].'">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                        </td></tr>';
                    }
                   
                }
                echo '</table><br>';
               
                $sql1 = "SELECT * FROM agent ";
                $result1 = $con->query($sql1);
                echo '<h2>Agent Details</h2><table id="agent_table">
                <tr>
                    <th>Agent ID</th>
                    <th>Name</th>
                    <th>Contacct No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th></tr>';
                if ($result1->num_rows > 0){
                   
                    while($row=$result1->fetch_assoc())
                    {
                        echo "<tr>";
                        echo '<td>'.$row['agent_id'].'</td><td>'.$row['f_name']." ".$row['l_name'].'</td><td>'.$row['contact_no'].'</td><td>'.$row['email'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>
                        <form method="post" action="sign up.php">
                            <input type="hidden" name="id" value="'.$row['agent_id'].'">
                            <input type="hidden" name="f_name" value="'.$row['f_name'].'">
                            <input type="hidden" name="l_name" value="'.$row['l_name'].'">
                            <input type="hidden" name="phone" value="'.$row['contact_no'].'">
                            <input type="hidden" name="email" value="'.$row['email'].'">
                            <input type="hidden" name="username" value="'.$row['username'].'">
                            <input type="hidden" name="password" value="'.$row['password'].'">
                            <input type="submit" name="ag-edit" value="Edit">
                        </form>
                        <form method="post" action="staff validate.php">
                            <input type="hidden" name="dlt" value="'.$row['agent_id'].'">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                        </td></tr>';
                    }
                   
                }
                echo '</table><br>';
                $sql2 = "SELECT * FROM admin ";
                $result2 = $con->query($sql2);
                echo '<h2>Admin Details</h2><table id="admin_table">
                <tr>
                    <th>Admin ID</th>
                    <th>Name</th>
                    <th>Contacct No</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th></tr>';
                if ($result2->num_rows > 0){
                   
                    while($row=$result2->fetch_assoc())
                    {
                        echo "<tr>";
                        echo '<td>'.$row['admin_id'].'</td><td>'.$row['f_name']." ".$row['l_name'].'</td><td>'.$row['contact_no'].'</td><td>'.$row['email'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>
                        <form method="post" action="sign up.php">
                            <input type="hidden" name="id" value="'.$row['admin_id'].'">
                            <input type="hidden" name="f_name" value="'.$row['f_name'].'">
                            <input type="hidden" name="l_name" value="'.$row['l_name'].'">
                            <input type="hidden" name="phone" value="'.$row['contact_no'].'">
                            <input type="hidden" name="email" value="'.$row['email'].'">
                            <input type="hidden" name="username" value="'.$row['username'].'">
                            <input type="hidden" name="password" value="'.$row['password'].'">
                            <input type="submit" name="ad-edit" value="Edit">
                        </form>
                        </td></tr>';
                    }
                   
                }
                echo '</table><br>';

                }
            ?>
            

        </div>
        

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