<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Donor Zone!</title>
    <link rel="stylesheet" href="styles/login-style.css">
</head>
<body>
    <?php
        include_once 'header.php'
    ?>

    
    <div class="reg-container">

    <form action="includes/login.inc.php" method="post">
        <h1>Login</h1>
        <div class="content">
            <div class="input-box">
                <label for="fname">User Name </label>
                <input type="text" placeholder="Enter User name or Email" name="uid" required>
            
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="pwd" required>
            </div>   
        </div>

        <div class="buttn-container">
            <div class="forgot-password">
                <p><a href="">Forgot your Password ?</a></p>
            </div>
            <button type="submit" name="submit">Log In</button><br>

            <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Fill in the all fields!
                                </div>';

                            }elseif ($_GET["error"] == "wronglogin"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Invalid Details!
                                </div>';

                            }
                        }    
                        ?>

            <div class="register">
                <p>Haven't an account ?<a href="signup.php">Register</a></p>
            </div>
        </div>
        
        
    </form>
    </div>
    <img src="img/pngegg2.png" alt="" width="450px" height="auto" class="logimg">

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