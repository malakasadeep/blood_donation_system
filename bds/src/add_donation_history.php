<!DOCTYPE html>
<?php

include_once 'header2.php';
include_once 'footer2.php';

include "includes/dbh.inc.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $bloodg = $_POST['bloodg'];
    $volume = $_POST['volume'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `history`(`name`, `date`, `location`, `group`, `volume`, `discription`) VALUE('$name', '$date', '$location', '$bloodg', '$volume', '$description');";

    $result=mysqli_query($conn,$sql);
    
    
    if($result){
        echo '<script type="text/javascript">
            window.onload = function () { 
                alert("Donation Added !"); 
                window.location.href = "view_history.php";
            }
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

        <link rel="stylesheet" href="styles/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    </head>
    

    <body>
       
        
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->
        <div class = "fBack">
            
            <h1>Add Last Donation</h1>
            



            <form action="add_donation_history.php" method="post">
                <label for="name">Donor Name : </label><br>
                <input type="text" id="name" name="name" size="50"><br><br>
                <label for="date">Donation Date: </label><br>
                <input type="date" id="date" name="date" size="50"><br><br>
                <label for="location">Location : </label><br>
                <input type="text" id="location" name="location" size="50"><br><br>
                <label for="blood">Blood Group</label><br>
                
                            <select name="bloodg" class="blg">
                                <option value="A+">A+</option>
                                <option value="O+">O+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="O-">O-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                            </select><br><br>
                <label for="volume">Blood Volume : </label><br>
                <input type="text" id="volume" name="volume" size="50"><br><br>
   
                  <br><br><label for="description">Description:</label><br>
                  <textarea id="description" name="description" rows="10" cols="82"></textarea><br><br>
                  <div class="link">
                    <button type="submit" name="submit">Submit</button>
                    <a href="view_history.php">View History</a>
                  </div>

                  <div class="app-img">
                    <img src="img/old.png" alt="" width="480px" height="auto">
                </div>
                  
                  
            </form>
            <br>
        </div>

<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

        

        
    </body>
</html>