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
            $hisId = $_GET['id'];

            // Fetch the property details from the database
            $query = "SELECT * FROM history WHERE hisId = '$hisId';";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $history = mysqli_fetch_assoc($result);
                $name = $history['name'];
                $date = $history['date'];
                $location = $history['location'];
                $group = $history['group'];
                $volume = $history['volume'];
                $discription = $history['discription'];
                

        ?>
        <form action="update_history.php" method="post">
                <input type="hidden" name="his_id" value="<?php echo $hisId; ?>">
                <label for="name">Donor Name : </label><br>
                <input type="text" id="name" name="name" size="50" value="<?php echo $name; ?>"><br><br>
                <label for="date">Donation Date: </label><br>
                <input type="date" id="date" name="date" size="50"value="<?php echo $date; ?>"><br><br>
                <label for="location">Location : </label><br>
                <input type="text" id="location" name="location" size="50" value="<?php echo $location; ?>"><br><br>
                <label for="blood">Blood Group</label><br>
                
                            <select name="bloodg" class="blg">
                                <option selected><?php echo $group; ?></option>
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
                <input type="text" id="volume" name="volume" size="50" value="<?php echo $volume; ?>"><br><br>
   
                  <br><label for="description">Description:</label><br>
                  <textarea id="description" name="description" rows="10" cols="82"><?php echo $discription; ?></textarea><br><br>
            
            
            <br>
            <button type="submit" name="submit">Update</button>
        </form>

        <div class="app-img">
            <img src="img/old.png" alt="" width="480px" height="auto">
         </div>

        <?php
            } else {
               
            }
        } else {
           
        }

        // Handle property update
        if (isset($_POST['submit'])) {
            $his_id = $_POST['his_id'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            $bloodg = $_POST['bloodg'];
            $volume = $_POST['volume'];
            $description = $_POST['description'];
            

            $updateQuery = "UPDATE history SET name='$name', date='$date', location='$location', `group`='$bloodg', volume='$volume', discription='$description' WHERE hisId='$his_id';";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<script type="text/javascript">
                    window.onload = function () { 
                        alert(" Details updated successfully!"); 
                        window.location.href = "view_history.php";
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
