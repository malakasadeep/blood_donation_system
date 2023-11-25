<?php
// Include the database connection file
include "includes/dbh.inc.php";

// Check if the appointment ID is provided in the URL
if (isset($_GET['id'])) {
    $appointmentId = $_GET['id'];

    // Prepare and execute the SQL query to delete the record from the appointments table
    $sql = "DELETE FROM appointments WHERE app_num = '$appointmentId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
            window.onload = function () { alert("Record deleted successfully!"); }
        </script>';
    } else {
        die(mysqli_error($conn));
    }
}
header("Location: view_appoiment.php");
// Redirect back to the view appointments page
exit();
?>
