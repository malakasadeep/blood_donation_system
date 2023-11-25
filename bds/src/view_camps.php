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
    <h1>Donation Camps</h1>
    <?php
    // Include the database connection file
    include "includes/dbh.inc.php";

    // Fetch all feedback records from the database
    $sql = "SELECT * FROM camp";
    $result = mysqli_query($conn, $sql);

    // Check if any records are found
    if (mysqli_num_rows($result) > 0) {
        // Display feedback records in a table
        echo '<table border =2>
                <tr>
                    <th>Organizer Name</th>
                    <th>Organizer NIC</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Nearest Blood Bank</th>

                    <th>Action</th>
                </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['organizerName'] . '</td>
                    <td>' . $row['NiC'] . '</td>
                    <td>' . $row['location'] . '</td>
                    <td>' . $row['date'] . '</td>
                    <td>' . $row['startTime'] . '</td>
                    <td>' . $row['endTime'] . '</td>
                    <td>' . $row['bank'] . '</td>
                    
                    <td><a href="delete_camp.php?id=' . $row['campId'] . '">Delete</a>
                        <a href="update_camps.php?id=' . $row['campId'] . '">Update</a>
                        
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
