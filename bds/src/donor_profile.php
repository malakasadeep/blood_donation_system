<?php
    session_start();
    require_once 'includes/functions.inc.php';
    require_once 'includes/dbh.inc.php';

    
    if (!isset($_SESSION["userid"])) {
        header("Location: login.php");
        exit();
    }

    $userId = $_SESSION["userid"];
    $sql = "SELECT * FROM donor WHERE DonorId = $userId";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row["DonorName"];
        $username = $row["DonorUid"];
        $phoneNo = $row["PhoneNo"];
        $email = $row["Email"];
        $donationScore = $row["DonationScore"];
        $dob = $row["DOB"];
        $adress = $row["Adress"];
        $nic = $row["NIC"];
        $bloodg = $row["BloodGroup"];
    } else {
        
        echo "User details not found.";
        exit();
    }



    if (isset($_FILES['profilepic'])) {
        $profilepic = $_FILES['profilepic'];
    
        
        if ($profilepic['error'] === UPLOAD_ERR_OK) {
            
            $tmpFilePath = $profilepic['tmp_name'];
    
            
            $fileData = file_get_contents($tmpFilePath);
    
            
            $stmt = $conn->prepare("UPDATE donor SET profilepic = ? WHERE DonorId = ?");
            $stmt->bind_param("si", $fileData, $_SESSION['userid']);
            $stmt->execute();
            $stmt->close();
    
            
            header("Location: donor_profile.php");
            exit();
        }
    }




    if (isset($_POST['delete'])) {
  
        $stmt = $conn->prepare("DELETE FROM donor WHERE DonorId = ?");
        $stmt->bind_param("i", $_SESSION['userid']);
        $stmt->execute();
        $stmt->close();
        header("location: login.php");

        session_destroy();
        
    }

    
?>

<!DOCTYPE html>
<html>
    <head>

        <title>
            The Donor Zone!
        </title>

        <link rel="stylesheet" href="styles/donorProfile-style.css">
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
                <h1>My Profile</h1>
            </div>



            <br>
                <div class="lable-txt">
                    <ul class="profile">
                        <li><font>Name:</font> <?php echo $name; ?></li>

                        <li><font>Donor ID:</font> <?php echo $userId; ?></li>

                        <li><font>Phone Number:</font> <?php echo $phoneNo; ?></li>

                        <li><font>Email:</font> <?php echo $email; ?></li>

                        <li><font>Date of Birth:</font> <?php echo $dob; ?></li>

                        <li><font>Address:</font> <?php echo $adress; ?></li>

                        <li><font>NIC:</font> <?php echo $nic; ?></li>

                        <li><font>Blood Group:</font> <?php echo $bloodg; ?></li>

                        <li><font>Donation Score:</font> <?php echo $donationScore; ?></li>
                    </ul>
                    
                </div>
            

            <div class="btns">
                <form method="POST" action="donor_profile.php" enctype="multipart/form-data">
                    <div class="propic_sub">
                        <label for="profilepic">Profile Picture:</label>
                        <input type="file" id="profilepic" name="profilepic">
                        <button type="submit" name="submit">Set Profile Pic</button>
                    </div>
                </form>
                <div class="btns2">
                    <br><a href="edit_profile.php"><button name="Submit">Edit Profile </button></a><br><br>
                    <?php
                    echo '<a href = "includes/logout.inc.php"><button  name="logout" >Log Out </button></a>' 
                    ?><br><br><br>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                     <button type="submit" name="delete">Delete Account </button>
                    </form> 
                </div>
               
            </div>
            <br>
        </div>
        
        
        <div class = "img-donorProfile">
            <?php
            
                $stmt = $conn->prepare("SELECT profilepic FROM donor WHERE DonorId = ?");
                $stmt->bind_param("i", $_SESSION['userid']);
                $stmt->execute();
                $stmt->bind_result($profilepic);
                $stmt->fetch();
                $stmt->close();

                
                if ($profilepic) {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($profilepic) . '" alt="Profile Picture" width="350px"> ';
                } else {
                    echo '<p>No profile picture available.</p>';
                }
            ?>
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