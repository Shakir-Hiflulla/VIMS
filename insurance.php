<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/commonStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <h1>All Insurance</h1>
            <?php
            require 'config.php';
            if(isset($_SESSION['id'])){
                
                $sql = "SELECT * FROM insurance";
                $result = $con->query($sql);
                echo '<table id="Insurance_table">
                <tr>
                  <th>No</th>
                  <th>Insurance Type</th>
                  <th>Details</th>
                  <th>Vehicle Type</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>';
            
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>".$row['ins_id']."</td><td>".$row['type']."</td><td>".$row['details']."</td><td>".$row['vehicle_type']."</td><td>".$row['amount']."</td><td><button onclick='buy(this)'>Buy</button></td>";
                        echo "</tr>";
                    }
                   
                }
                echo '</table>';
            }
            elseif(isset($_SESSION['staff'])){
                $sql = "SELECT * FROM insurance";
                $result = $con->query($sql);
                echo '<table id="Insurance_table">
                <tr>
                  <th>No</th>
                  <th>Insurance Type</th>
                  <th>Details</th>
                  <th>Vehicle Type</th>
                  <th>Amount</th>
                  <th>Action</th>

                </tr>';
            
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo '<td>'.$row['ins_id'].'</td><td>'.$row['type'].'</td><td>'.$row['details'].'</td><td>'.$row['vehicle_type'].'</td><td>'.$row['amount'].'</td><td>
                        <form method="post" action="register ins.php">
                            <input type="hidden" name="dlt" value="'.$row['ins_id'].'">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                        <form method="post" action="insurance reg.php">
                            <input type="hidden" name="dlt" value="'.$row['ins_id'].'">
                            <input type="hidden" name="type" value="'.$row['type'].'">
                            <input type="hidden" name="details" value="'.$row['details'].'">
                            <input type="hidden" name="v_type" value="'.$row['vehicle_type'].'">
                            <input type="hidden" name="amount" value="'.$row['amount'].'">
                            <input type="submit" name="edit" value="Edit">
                        </form></td>';
                        echo "</tr>";

                                               
                    }
                   
                }
                echo '</table>';
                
            }else{
                $sql = "SELECT * FROM insurance";
                $result = $con->query($sql);
                echo '<table id="Insurance_table">
                <tr>
                  <th>No</th>
                  <th>Insurance Type</th>
                  <th>Details</th>
                  <th>Vehicle Type</th>
                  <th>Amount</th>
                </tr>';
            
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>".$row['ins_id']."</td><td>".$row['type']."</td><td>".$row['details']."</td><td>".$row['vehicle_type']."</td><td>".$row['amount']."</td>";
                        echo "</tr>";
                    }
                   
                }
                echo '</table>';
                
            }
            if(isset($_SESSION['staff'])){
                echo '<br><form method ="post" action="insurance reg.php">
                    <input type="submit" name="add" value="Add New Plan">
                </form>';
            }else{
                echo '<br><form method ="post" action="contact.php">
                        <input type="submit" name="help" value="Get Help">
                    </form>';
            }
                
            ?>   
              <br>
              
        </div>

        <script>
            function buy() {
              window.location.href='insurance reg.php';
            }
        </script>

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