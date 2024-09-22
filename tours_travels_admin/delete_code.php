<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost", "root", "", "demo");

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $deleteQuery = "DELETE FROM `login` WHERE id = $id";
    if (mysqli_query($connection, $deleteQuery)) {
        header('location:admin.php');
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
    mysqli_close($connection);
} else {
    echo "Invalid request.";
}
?>

