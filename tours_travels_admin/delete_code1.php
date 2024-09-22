<?php
if (isset($_GET['id'])) {
    $id1 = $_GET['id'];
    $connection = mysqli_connect("localhost", "root", "", "demo");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $deleteQuery1 = "DELETE FROM `hotel` WHERE id = $id1";
    if (mysqli_query($connection, $deleteQuery1)) {
        header('location:ticket.php');
    } 
    else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
    mysqli_close($connection);
} else {
    echo "Invalid request.";
}
?>