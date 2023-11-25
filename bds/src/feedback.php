<!DOCTYPE html>
<?php

include "includes/dbh.inc.php";
if(isset($_POST['submit'])){
    $did = $_POST['did'];
    $center = $_POST['center'];
    $cno = $_POST['cno'];
    $msge = $_POST['msge'];

    $sql = "INSERT INTO `feedback`(`DonorId`, `DonationCenter`, `CardNo`, `Message`) VALUE('$did', '$center', '$cno', '$msge');";

    $result=mysqli_query($conn,$sql);
    
    
    if($result){
        echo '<script type="text/javascript">
            window.onload = function () { alert("Appointment Added !"); }
        </script>';

    }else{
        die(mysqli_error($conn));
    }

}

?>
<html>
    <head>

        <title>
            The Donor Zone!!
        </title>

        <link rel="stylesheet" href="styles/feedback-style.css">
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
        <div class = "fBack">
            
            <h1>Your Feedback</h1>
            <h3>We would like your feedback to improve our service.</h3>



            <form action="feedback.php" method="post">
                <label for="did">Donor ID: </label><br>
                <input type="text" id="did" name="did" size="50"><br><br>
                <label for="center">Donation Center: </label><br>
                <input type="text" id="center" name="center" size="50"><br><br>
                <label for="cno">Donation Card Number: </label><br>
                <input type="text" id="cno" name="cno" size="50"><br><br><br>
                <p class="star">How would you rate your exprience of donating blood and our service?</p>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="5">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="4">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="3">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="2">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="1">1 star</label><br><br>
                </div>  
                  <br><br><br><label for="msge">Any Messages:</label><br>
                  <textarea id="msge" name="msge" rows="10" cols="82"></textarea><br><br>
                  <div class="link">
                    <button type="submit" name="submit">Submit</button>
                    <a href="view_feedback.php">View Feedback</a>
                  </div>
                  
                  
            </form>
            <br>
        </div>

        <div class = "img-fBack">
        <img src="img/Feedback 1.png" alt="faq" width="600px" height="700px">
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