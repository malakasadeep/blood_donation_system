<?php
        include_once 'header2.php';
        include_once 'footer2.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
    <link rel="stylesheet" href="styles/vf-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

</head>
<body>
    

    <div class="feedbackcontainer">
    <h1>Feedback</h1>
    <?php
    // Include the database connection file
    include "includes/dbh.inc.php";

    // Fetch all feedback records from the database
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($conn, $sql);

    // Check if any records are found
    if (mysqli_num_rows($result) > 0) {
        // Display feedback records in a table
        echo '<table border =2>
                <tr>
                    <th>Feedback ID</th>
                    <th>Donor ID</th>
                    <th>Donation Center</th>
                    <th>Card No</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['FeedbackId'] . '</td>
                    <td>' . $row['DonorId'] . '</td>
                    <td>' . $row['DonationCenter'] . '</td>
                    <td>' . $row['CardNo'] . '</td>
                    <td>' . $row['Message'] . '</td>
                    <td><a href="delete_feedback.php?id=' . $row['FeedbackId'] . '">Delete</a>
                        <a href="update_feedback.php?id=' . $row['FeedbackId'] . '">Update</a>
                        
                    </td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo 'No feedback records found.';
    }

    // Close the database connection
    mysqli_close($conn);
    ?> 
    </div>
    
</body>
</html>
