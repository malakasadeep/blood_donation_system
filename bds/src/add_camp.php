<!DOCTYPE html>
<?php

include_once 'header2.php';
include_once 'footer2.php';

include "includes/dbh.inc.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
    $bank = $_POST['bank'];
    $district = $_POST['district'];

    $sql = "INSERT INTO `camp`(`organizerName`, `NiC`, `location`, `date`, `startTime`, `endTime`, `bank`, `district`) VALUE('$name', '$nic', '$location', '$date', '$stime', '$etime', '$bank', '$district');";

    $result=mysqli_query($conn,$sql);
    
    
    if($result){
        echo '<script type="text/javascript">
            window.onload = function () { 
                alert("Camp Added !"); 
                window.location.href = "view_camps.php"; 
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

        <link rel="stylesheet" href="styles/camp-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    </head>
    

    <body>
       
        
<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->
        <div class = "fBack">
            
            <h1>Organize a Donation Camp</h1>
            



            <form action="add_camp.php" method="post">
                <label for="name">Organizer Name : </label>
                <input type="text" id="name" name="name" size="50"><br><br>
                <label for="nic">Organizer NIC : </label>
                <input type="text" id="nic" name="nic" size="50"><br><br>
                <label for="location">Location : </label>
                <input type="text" id="location" name="location" size="50"><br><br>
                <label for="date">Date : </label>
                <input type="date" id="date" name="date" size="50"><br><br>
                <label for="stime">Start Time : </label>
                <input type="time" id="stime" name="stime" size="50"><br><br>
                <label for="etime">End Time : </label>
                <input type="time" id="etime" name="etime" size="50"><br><br>
                <label for="bank">Nearest Blood Bank : </label>
                <input type="text" id="bank" name="bank" size="50"><br><br>
                <label for="district">District : </label>
                <input type="text" id="district" name="district" size="50"><br><br>
                
   
                  
                  <div class="link">
                    <button type="submit" name="submit">Submit</button>
                    <a href="view_camps.php">View camps</a>
                  </div>
                  
                  
            </form>

            <div class="app-img">
            <img src="img/camp.png" alt="" width="500px" height="auto">
        </div>
            <br>
        </div>

<!--/*--------------------------------------------------------------------------------------------------------------------------*/-->     

        

        
    </body>
</html>