<!DOCTYPE html>
<html>
    <head>

        <title>
            The Donor Zone!
        </title>

        <link rel="stylesheet" href="styles/contactUs-style.css">
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
                <button class="btnlogin-home">Login</button>
                <button class="btnreg-home">Register</button>
                
            </nav>
        </header>
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->
        <div class = "contactus">
            <h1>Contact Us</h1>
            <h3>Please fill out the form and a member from our medical team will get back to you 
            within 24 hours.</h3>
        </div>

        <div class = "contactForm">
        <form>
            <label for="fname">Your Name (Required)</label><br>
            <input type="text" id="fname" name="fname" size="102"><br><br>
            <label for="email">Your Email (Required)</label><br>
            <input type="text" id="email" name="email" size="102"><br><br>
            <label for="subject">Subject</label><br>
            <input type="text" id="subject" name="subject" size="102"><br><br>
            <label for="msge">Message</label><br>
            <textarea id="msge" name="msge" rows="10" cols="82"></textarea><br><br>
            <div class="box">
                <a href="#popup-box">
                Send
            </a>
            </div>
            <div id="popup-box" class="modal">
                <div class="content">
                    <h1 style="color: green;">
                        Thank you!
                    </h1>
                    <b>
                        <p>We will get back to you ASAP.</p>
                    </b>
                    <a href="#"
                    class="box-close">
                        ×
                    </a>
                </div>
            </div>
          </form>
        </div>

        <div class = "inquiries">
            <h3><u>For further inquiries</u></h3>
            <p>Email: <a href="mailto:thedonorzone@gmail.com">thedonorzone@gmail.com</a></p>
            <p>Contact: <a href="tel:011-4595544">011-4595544</a></p>
            <p>Main Center: 17, Galle Face Road, Colombo</p>
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