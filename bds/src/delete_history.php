<?php
// Include the database connection file
include "includes/dbh.inc.php";

// Check if the feedback ID is provided
if (isset($_GET['id'])) {
    $historyId = $_GET['id'];

    // Delete the feedback record from the database
    $sql = "DELETE FROM history WHERE hisId = '$historyId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">
            window.onload = function () { alert("Feedback record deleted!"); }
        </script>';
    } else {
        die(mysqli_error($conn));
    }
}

// Redirect back to the view feedback page
header("Location: view_history.php");
exit();
?>
