<?php
        include_once 'header2.php';
        include_once 'footer2.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Camp</title>
    <link rel="stylesheet" href="styles/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
    <div class="background">
      <div class="fBack">
        <h1>Update Camp Details</h1>
        <?php
        // Include the database connection file
        include "includes/dbh.inc.php";

        // Check if the property ID is provided
        if (isset($_GET['id'])) {
            $campId = $_GET['id'];

            // Fetch the property details from the database
            $query = "SELECT * FROM camp WHERE campId = '$campId';";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $camp = mysqli_fetch_assoc($result);
                $oname = $camp['organizerName'];
                $nic = $camp['NiC'];
                $location = $camp['location'];
                $date = $camp['date'];
                $stime = $camp['startTime'];
                $etime = $camp['endTime'];
                $bank = $camp['bank'];
                $district = $camp['district'];

        ?>
        <form action="update_camps.php" method="post">
                <input type="hidden" name="camp_id" value="<?php echo $campId; ?>">
                <label for="name">Organizer Name : </label>
                <input type="text" id="name" name="oname" size="50" value="<?php echo $oname; ?>"><br><br>
                <label for="nic">Organizer NIC : </label>
                <input type="text" id="nic" name="nic" size="50" value="<?php echo $nic; ?>"><br><br>
                <label for="location">Location : </label>
                <input type="text" id="location" name="location" size="50" value="<?php echo $location; ?>"><br><br>
                <label for="date">Date : </label>
                <input type="date" id="date" name="date" size="50" value="<?php echo $date; ?>"><br><br>
                <label for="stime">Start Time : </label>
                <input type="time" id="stime" name="stime" size="50" value="<?php echo $stime; ?>"><br><br>
                <label for="etime">End Time : </label>
                <input type="time" id="etime" name="etime" size="50" value="<?php echo $etime; ?>"><br><br>
                <label for="bank">Nearest Blood Bank : </label>
                <input type="text" id="bank" name="bank" size="50" value="<?php echo $bank; ?>"><br><br>
                <label for="district">District : </label>
                <input type="text" id="district" name="district" size="50" value="<?php echo $district; ?>"><br><br>
            
                <div class="app-img">
                    <img src="img/camp.png" alt="" width="500px" height="auto">
                </div>
            <br><br>
            <button type="submit" name="submit">Update</button>
        </form>
        <?php
            } else {
               
            }
        } else {
           
        }

        // Handle property update
        if (isset($_POST['submit'])) {
            $camp_id = $_POST['camp_id'];
            $oname = $_POST['oname'];
            $nic = $_POST['nic'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $stime = $_POST['stime'];
            $etime = $_POST['etime'];
            $bank = $_POST['bank'];
            $district = $_POST['district'];


            $updateQuery = "UPDATE camp SET organizerName='$oname', NiC='$nic', location='$location', date='$date', startTime='$stime', endTime='$etime', bank='$bank', district='$district' WHERE campId='$camp_id';";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<script type="text/javascript">
                    window.onload = function () { 
                        alert("Camp Details updated successfully!"); 
                        window.location.href = "view_camps.php";
                    }
                </script>';
                
            } else {
                die(mysqli_error($conn));
            }

            
           
        }

        // Close the database connection
        mysqli_close($conn);
        
        ?>
    </div>  
    </div>
    
</body>
</html>
