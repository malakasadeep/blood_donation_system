<?php
session_start();
require_once 'includes/dbh.inc.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $score = $_POST['score'];
    $userid = $_SESSION['userid'];

    $sql = "UPDATE donor SET DonorName = '$name', Email = '$email', PhoneNo = '$mobile', DOB = '$dob', Adress = '$address', DonationScore ='$score' WHERE DonorId = '$userid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
        window.onload = function () { 
            alert("Account Updated !"); 
            window.location.href = "donor_profile.php";
        }
        </script>';
    } else {
        echo "Error updating user details: " . mysqli_error($conn);
    }
}

// Fetch user details from the database
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM donor WHERE DonorId = '$userid'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
    <head>

        <title>
            The Donor Zone!
        </title>

        <link rel="stylesheet" href="styles/editProfile-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    </head>
    

    <body>
       
    <header>   
            <img src="img/logo.png" alt="logo" width="600px" height="125px" class="logo">
            <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="donor_profile.php">Donor</a>
                <a href="">Staff</a>
                <a href="centers.php">Centers</a>
                <a href="about_us.php">About Us</a>
                <a href="faq.php">FAQs</a>
                
                <?php
                    echo '<a href = "includes/logout.inc.php"><button class="btnlogout">Log Out</button></a>' 
                ?>
                
                <img src="img/propic.png" alt="" width="95px" height="95px" class="propic">
                
            </nav>
        </header>
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->
        <div class="donorProfile">
        <div>
            <h1> Edit My Profile</h1>
        </div>


        <form method="post" action="edit_profile.php">
            <br>
            <div class="lable-txt">
                <label for="name">Name:</label><br>
                <input type="text" name="name" value="<?php echo $user['DonorName']; ?>"><br><br>
            
                <label for="mobile">Phone Number:</label><br>
                <input type="text" name="mobile" value="<?php echo $user['PhoneNo']; ?>"><br><br>

                <label for="name">Email:</label><br>
                <input type="text" name="email" value="<?php echo $user['Email']; ?>"><br><br>

                <label for="dob">Email:</label><br>
                <input type="date" name="dob" value="<?php echo $user['DOB']; ?>"><br><br>

                <label for="address">Email:</label><br>
                <input type="text" name="address" value="<?php echo $user['Adress']; ?>"><br><br>

                <label for="score">Donation Score:</label><br>
                <input type="text" name="score" value="<?php echo $user['DonationScore']; ?>"><br><br>
            

                <div class="btns">
                    <button type="submit" name="submit">Update</button>
                    
                </div>
            </div>

            
        </form>
    </div>
        
    <div class = "img-donorProfile">
        <img src="img/logo_756242.png" alt="" width="700px">
            
    </div>
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            
            <div class="container">
                <div class="aboutus">
                    <h2>About Us</h2>
                    <p>In our blood donation web-base platform, we are significantly dedicated to making a distinction in individuals's lives. 
                        With a strong belief in the importance of blood donation, we have created a platform that 
                        connects donors and recipients seamlessly. Our user-friendly interface ensures a smooth experience for both parties, 
                        while our commitment to privacy and security ensures a safe environment.  
                        Join us in our mission to save lives, one donation at a time</p>

                        <ul class="sci">
                            <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        </ul>
                </div>

                <div class="quicklinks">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="">Privacy Police</a></li>
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                    </ul> 
                </div>

                <div class="contact">
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>National Blood Center,<br>
                                Narahenpita,Colombo 05,<br>Sri Lanka</span><br>
                        </li>

                        <li>
                            <span><i class="fa fa-phone" aria-hidden="true"></i></i></span>
                            <a href="">+94 11 2369931</a> <br>
                        </li>

                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <a href="">thedonorzone@gmail.com</a> 
                        </li>
   
                    </ul>

                </div>
 
            </div>

            <div class="copyright">
                <p> Copyright ©️ 2023 TheDonorZone,Inc.All right reserved.</p>
            </div>

        </footer>

        
    </body>
</html>