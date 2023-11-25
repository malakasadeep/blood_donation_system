<?php
        include_once 'header2.php';
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/vagb.css">
    <title>Document</title>
</head>
<body>
    <div class="tabelcontainer">
        <?php
        // Include the database connection file
        include "includes/dbh.inc.php";

        // Fetch the appointment data from the appointments table
        $sql = "SELECT * FROM appointments";
        $result = mysqli_query($conn, $sql);

        // Check if there are any records
        if (mysqli_num_rows($result) > 0) {
            ?>
            <h1>Appoiments</h1>
            <br><br><br><br>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Center</th>
                    <th>Donor ID</th>
                    <th>Action</th>
                </tr>
            <?php
            // Loop through each row and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['app_num']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['center']; ?></td>
                    <td><?php echo $row['DonorId']; ?></td>
                    <td><a href="delete_appoiment.php?id=<?php echo $row['app_num']; ?>">Delete</a>
                    <a href="update_appointment.php?id=<?php echo $row['app_num']; ?>">Update</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        } else {
            echo "No records found.";
        }

        // Close the database connection
        mysqli_close($conn);
?>
    </div>

    <?php
        
        include_once 'footer2.php';
    ?>
</body>
</html>

