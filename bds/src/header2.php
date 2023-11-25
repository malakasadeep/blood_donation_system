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
    </body>
</html>