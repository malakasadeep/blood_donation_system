<?php
        include_once 'header2.php';
        include_once 'footer2.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Property</title>
    <link rel="stylesheet" href="styles/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
    <div class="background">
      <div class="fBack">
        <h1>Update Appointment</h1>
        <?php
        // Include the database connection file
        include "includes/dbh.inc.php";

        // Check if the property ID is provided
        if (isset($_GET['id'])) {
            $appId = $_GET['id'];

            // Fetch the property details from the database
            $query = "SELECT * FROM appointments WHERE app_num = '$appId';";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $appointments = mysqli_fetch_assoc($result);
                $donorId = $appointments['DonorId'];
                $name = $appointments['name'];
                $phone = $appointments['phone'];
                $date = $appointments['date'];
                $time = $appointments['time'];
                $center = $appointments['center'];
        ?>
        <form action="update_appointment.php" method="post">
            <input type="hidden" name="app_id" value="<?php echo $appId; ?>">
            <label for="province">donor Id:</label><br>
            <input type="text" id="donorId" name="donorId" size="50" value="<?php echo $donorId; ?>" required><br><br>
            <label for="address">Name:</label><br>
            <input type="text" id="name" name="name" size="50" value="<?php echo $name; ?>" required><br><br>
            <label for="type">Phone:</label><br>
            <input type="text" id="phone" name="phone" size="50" value="<?php echo $phone; ?>" required><br><br>
            <label for="price">Date:</label><br>
            <input type="date" id="date" name="date" size="50" value="<?php echo $date; ?>" required><br><br>
            <label for="description">Time:</label><br>
            <input type="time" id="time" name="time" size="50" value="<?php echo $time; ?>" required><br><br>
            <label for="description">Center:</label><br>
            <input type="text" id="center" name="center" size="50" value="<?php echo $center; ?>" required><br><br>
            <br><br>
            <button type="submit" name="submit">Update</button>
        </form>

        <div class="app-img">
            <img src="img/resevapp.png" alt="" width="480px" height="auto">
        </div>

        <?php
            } else {
               
            }
        } else {
           
        }

        // Handle property update
        if (isset($_POST['submit'])) {
            $app_id = $_POST['app_id'];
            $donorId = $_POST['donorId'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $center = $_POST['center'];

            $updateQuery = "UPDATE appointments SET DonorId='$donorId', name='$name', phone='$phone', date='$date', time='$time' , center ='$center' WHERE app_num='$app_id';";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<script type="text/javascript">
                    window.onload = function () { 
                        alert("Property updated successfully!");
                        window.location.href = "view_appoiment.php"; 
                    
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
