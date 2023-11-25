<?php
include 'includes/dbh.inc.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $center=$_POST['center'];
  $DonorId=$_POST['DonorId'];

  $sql="insert into `appointments`(`name`,`phone`,`date`,`time`,`center`,`DonorId`) values('$name','$phone','$date','$time','$center','$DonorId');";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo '<script type="text/javascript">

            window.onload = function () { alert("Appointment Added !"); }

        </script>';
  }
  else{
    die(mysqli_error($conn));
  }
}
?>
<!DOCTYPE html>
<html>
    <head>

        <title>
            The Donor Zone!
        </title>

        <link rel="stylesheet" href="styles/reserve-appoiment.css">
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
    <div class="b1">
        <div class="app-container">
                <div class="link">
                
                <h1>Reserving an Appointment<a href="view_appoiment.php"> My Appointments</a></h1>
            </div>
            
            <form method="post" action="reserve-appoiment.php"><br>
                <div class="lable-txt">
                <label for="name ">Donor Name</label><br>
                <input type="text" name="name" ><br><br>
                <label for="name ">Donor ID</label><br>
                <input type="text" name="DonorId" ><br><br>
                <label for="name ">Phone Number</label><br>
                <input type="text" name="phone" ><br><br>
                <label for="name ">Donation Date</label><br>
                <input type="date" name="date" ><br><br>
                <label for="name ">Donation Time</label><br>
                <input type="time" name="time" ><br><br>
                <label for="name ">Donation Center</label><br>
                
                <select name="center"><br>

                    <option>Select Option</option>
                    <option>Colombo</option>
                    <option>Galle</option>
                    <option>Kandy</option>
                    <option>Jaffna</option>
                </select><br><br>
                </div>
                
                <div class="btns">
                    <button type="submit" name="submit">Submit </button>
                    <button type="reset" name="reset">Reset </button>
                </div>
                
            </form>
        </div>
        <div class="app-img">
            <img src="img/resevapp.png" alt="" width="480px" height="auto">
        </div>
        
        
  
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





