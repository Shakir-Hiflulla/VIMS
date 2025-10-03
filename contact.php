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
        <?php
        if(isset($_POST['help'])){
            echo '<div class="contactUs_div">
            <h1>Send a message to our agent</h1>
            <form class="cform" method="post" action="contact valid.php">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required><br><br>
                <textarea id="message" name="message" cols="50" rows="10" placeholder="Ask Your Doubt"
                    required></textarea><br>
                <button type="submit" id="cbutton" name="help">Submit</button>
            </form>
            </div>';

        }elseif(isset($_POST['response'])){
            require 'config.php';
            $id=$_POST['rspns'];

            $sql="SELECT * FROM faqs WHERE faq_id=$id";
            $result=$con->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo '<div style="margin-left=25%" class="contactUs_div">
                    <h1>FAQs</h1>
                    <div class="ad"><form class="cform" method="post" action="contact valid.php">
                        <input type="hidden" id="name" name="faq_id" value="'.$id.'">
                        <p style="font-size:20px ">Question : '.$row['question'].'</p>
                        <p style="font-size:20px ">Email : '.$row['email'].' </p>
                        <textarea id="message" name="answer" cols="50" rows="10" placeholder="Enter your Response"
                            required></textarea><br>
                        <button type="submit" id="cbutton" name="response">Submit</button>
                    </form>
                    
                    </div>';
                    }
            }

            
        }elseif(isset($_POST['reply'])){
            $id=$_POST['qid'];
            echo '<div class="contactUs_div">
            <h1>Quote reply</h1>
            <form class="cform" method="post" action="mailto:'.$_POST['email'].'">
            <p style="font-size:20px ">Question : '.$_POST['question'].'</p>
            <p style="font-size:20px ">Name : '.$_POST['name'].' </p>
            <p style="font-size:20px ">Mail : '.$_POST['email'].' </p>
            <textarea id="message" name="answer" cols="50" rows="6" placeholder="Enter your Reply"
                required></textarea>
            <button type="submit" id="cbutton" name="ag-rply">Reply</button>
        </form>
        </div>';     
        }else{
            echo '<div class="contactUs_div">
            <h1>Contact Us</h1>
            <p>We value your feedback, questions, and inquiries. Please feel free to reach out to us!</p>
            <form class="cform" method="post" action="contact valid.php">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="Email" id="email" name="email" placeholder="Your Email" required><br><br>
                <textarea id="message" name="message" cols="50" rows="10" placeholder="Ask Your Doubt"
                    required></textarea><br>
                <button type="submit" id="cbutton" name="submit">Submit</button>
            </form>
            <img class="loc" src="image\location.jpeg" alt="location">
            <div class="contact-info">
                <p><i class="fas fa-map-marker-alt"></i><a href="#">72 Welivita road, Malabe,Srilanka</a></p>
                <p><i class="fas fa-phone"></i><a href="tel:+94 075 0099223"> +94 075 0099223</a><br><a
                        href="tel:+94 075 0077223">+94 075 0077223</a></p>
                <p><i class="fas fa-envelope"></i><a href="AutoGuardsupport@gmail.com">AutoGuardsupport@gmail.com</a>
                </p>
            </div>';
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