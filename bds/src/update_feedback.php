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
            $feedbackId = $_GET['id'];

            // Fetch the property details from the database
            $query = "SELECT * FROM feedback WHERE FeedbackId = '$feedbackId';";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $feedback = mysqli_fetch_assoc($result);
                $donorId = $feedback['DonorId'];
                $center = $feedback['DonationCenter'];
                $card = $feedback['CardNo'];
                $massage = $feedback['Message'];

        ?>
        <form action="update_feedback.php" method="post">
            <input type="hidden" name="feedback_id" value="<?php echo $feedbackId; ?>">
            <label for="did">Donor Id:</label><br>
            <input type="text" id="donorId" name="donorId" size="50" value="<?php echo $donorId; ?>" required><br><br>
            <label for="center">Donation Center:</label><br>
            <input type="center" id="center" name="center" size="50" value="<?php echo $center; ?>" required><br><br>
            <label for="card">Donation Card Number:</label><br>
            <input type="text" id="card" name="card" size="50" value="<?php echo $card; ?>" required><br><br>

            <p class="star">How would you rate your exprience of donating blood and our service?</p>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="5">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="4">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="3">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="2">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="1">1 star</label><br><br>
                </div>  
                  <br><br><br><label for="msge">Any Messages:</label><br>
                  <textarea id="msge" name="massage" rows="10" cols="82" required><?php echo $massage; ?></textarea><br><br>
            
            
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
            $feedback_id = $_POST['feedback_id'];
            $donorId = $_POST['donorId'];
            $center = $_POST['center'];
            $card = $_POST['card'];
            $massage = $_POST['massage'];


            $updateQuery = "UPDATE feedback SET DonorId='$donorId', DonationCenter='$center', CardNo='$card', Message='$massage' WHERE FeedbackId='$feedback_id';";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<script type="text/javascript">
                    window.onload = function () { 
                        alert("Feedback updated successfully!"); 
                        window.location.href = "view_feedback.php";
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
