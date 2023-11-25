<!DOCTYPE html>
<html>
    <head>

        <title>
            The Donor Zone!
        </title>

        <link rel="stylesheet" href="styles/signup-style.css">
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
            </nav>
                <a href="login.php">
                    <button class="btnlogin-home">Login</button>
                </a>
                <a href="signup.php">
                    <button class="btnreg-home">Register</button>
                </a>
        </header>
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->
        <div class="register">

            <div class="reg-container">

                <form action="includes/signup.inc.php" method="post">
                    <h1>Register as a Donor</h1>
                    <div class="content">
                        <div class="input-box">
                            <label for="fname">Name</label>
                            <input type="text" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="input-box">
                            <label for="lname">User Name</label>
                            <input type="text" placeholder="Enter User name" name="uid" required>
                        </div>
                        
                        <div class="gender-category">
                            <label for="">Gender</label><br>
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="gender">Male</label><br>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="gender">Female</label>
                        </div>

                        <div class="dob">
                            <label for="">Date of Birth</label>
                            <input type="date" placeholder="Date of Bitrh" name="dob" class="dob">
                        </div>


                        <div class="input-box">
                            <label for="address">Permenet Address</label>
                            <input type="text" placeholder="Enter Address" name="address" required>
                        </div>
                        <div class="input-box">
                            <label for="fname">Weight</label>
                            <input type="Weight" placeholder="Enter Your Weight" name="Weight" required>
                        </div>

                        <div class="input-box">
                            <label for="phonenumber">Phone Number</label>
                            <input type="tel" placeholder="Enter Phone Number" name="phonenumber" required>
                        </div>
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" name="email" >
                        </div>
                        <div class="input-box">
                            <label for="nic">NIC</label>
                            <input type="text" placeholder="Enter NIC No" name="nic" >
                        </div>
                        <div class="input-box">
                            <label for="blood">Blood Group</label>
                            <select name="bloodg">
                                <option value="A+">A+</option>
                                <option value="O+">O+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="O-">O-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Enter password" name="pwd" >
                        </div>
                        <div class="input-box">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" placeholder="Confirm Password" name="pwdrepeat" >
                        </div>
                    </div>
                    <div class="allert">
                        <p>By clicking Sign Up, you agree to our <a href="#">Terms,</a><a href="#">Privacy Policy</a> and <a href="#">Cookies Policy.</a>You may recive SMS notification from us and can opt out at any time.</p>
                    </div>
                    <div class="buttn-container">
                        <button type="submit" name="submit">Register</button><br>

                        <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Fill in the all fields!
                                </div>';

                            }elseif ($_GET["error"] == "invaliduid"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Invalid username!
                                </div>';

                            }elseif ($_GET["error"] == "invalidemail"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Invalid Email!
                                </div>';

                            }elseif ($_GET["error"] == "passwordnotmatch"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Password not matching!
                                </div>';

                            }elseif ($_GET["error"] == "usernametaken"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Email already in Use!
                                </div>';
                            }elseif ($_GET["error"] == "stmtfaild"){
                                echo'<div class="error">
                                <img src="img/error.png" alt="" width="50px" height="50px"> <br>Somethig wants Wrong!
                                </div>';
                            }
                        }    
                        ?>
                    </div>
                    <div class="login">
                        <p>Already have an account ?<a href="login.php">Log in</a></p>
                    </div>
                    
                </form>
            </div>
            <img src="img/pngegg.png" alt="" width="550px" height="auto" class="reg-img">
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