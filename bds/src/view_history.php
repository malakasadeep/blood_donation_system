<?php
        include_once 'header2.php';
        include_once 'footer2.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>View History</title>
    <link rel="stylesheet" href="styles/vf-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

</head>
<body>
    

    <div class="feedbackcontainer">
    <h1>Donation History</h1>
    <?php
    // Include the database connection file
    include "includes/dbh.inc.php";

    // Fetch all feedback records from the database
    $sql = "SELECT * FROM history";
    $result = mysqli_query($conn, $sql);

    // Check if any records are found
    if (mysqli_num_rows($result) > 0) {
        // Display feedback records in a table
        echo '<table border =2>
                <tr>
                    <th>Donor Name</th>
                    <th>Donation Date</th>
                    <th>Location</th>
                    <th>Blood Group</th>
                    <th>Blood Volume</th>
                    <th>Description</th>
                    

                    <th>Action</th>
                </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['date'] . '</td>
                    <td>' . $row['location'] . '</td>
                    <td>' . $row['group'] . '</td>
                    <td>' . $row['volume'] . '</td>
                    <td>' . $row['discription'] . '</td>
                    
                    
                    <td><a href="delete_history.php?id=' . $row['hisId'] . '">Delete</a>
                        <a href="update_history.php?id=' . $row['hisId'] . '">Update</a>
                        
                    </td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo 'No  records found.';
    }

    // Close the database connection
    mysqli_close($conn);
    ?> 
    </div>
    
</body>
</html>
