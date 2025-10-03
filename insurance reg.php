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
        <div class="login_div">
            <?php
            if (isset($_SESSION['id'])){
                echo '<form method="post" action="register ins.php">
                <h1>Enter Details</h1>
                <label for="ins_no">Insurance No</label><br>
                <select name="ins_no" id="ins_no">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                <label for="vehicle_t">Vehicle type</label><br>
                <select name="vehicle_t" id="vehicle_t">
                    <option value="car">Car/Van</option>
                    <option value="heavy">Heavy vehicle</option>
                    <option value="bike">Motorbike</option>
                    <option value="wheel">Three wheel</option>
                </select><br>
                <input type="text" name="vhcl_no" placeholder="Vehicle No" required><br>
                <input type="submit" name="register" value="Register" ><br>
            </form>';

            }else{
                if(isset($_POST['edit'])){
                    echo '<form method="post" action="register ins.php">
                    <h1>Enter New Details</h1>
                    <input type="hidden" name="ins_no" value="'.$_POST['dlt'].'">
                    <input type="text" name="ins_type" value="'.$_POST['type'].'" required><br>
                    <input type="text" name="vhcl_type" value="'.$_POST['v_type'].'" required><br>
                    <label for="num">Amount</label><br>
                    <input type="number" name="amount" id="num" min="1000" step="1000" value="'.$_POST['amount'].'" required><br>
                    <textarea name="details" cols="30" rows="10"  required>'.$_POST['details'].'</textarea>
                    <input type="submit" name="edit" value="Confirm" ><br>
                </form>';
                }
                if(isset($_POST['add'])){
                    echo '<form method="post" action="register ins.php">
                    <h1>Add New Insurance Plan</h1><br>';
                    echo '<input type="text" name="ins_type" placeholder="Insurance Type" required><br>
                    <input type="text" name="vhcl_type" placeholder="Vehicle Type" required><br>
                    <label for="num">Amount</label><br>
                    <input type="number" name="amount" id="num" min="1000" step="1000" required><br>
                    <textarea name="details" cols="30" rows="10" placeholder="Insurance Details"></textarea>
                    <input type="submit" name="add" value="Add" ><br>
                </form>';
                }
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