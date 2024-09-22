<?php
$con = mysqli_connect('localhost', 'root', '', 'demo');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $place = $_POST['place'];
    $days = $_POST['days'];
    $hotel = $_POST['hotelName'];
    $room = $_POST['hotelRoom'];
    $person = $_POST['person'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $updateQuery = "UPDATE `hotel` SET`place`=`$place`,`days`=`$days`,`hotel`=`$hotel`,`room`=`$room`,`person`=`$person`,`price`=`$price`,`description`=`$description` 
        WHERE `id` = $id";

    if (mysqli_query($con, $updateQuery)) {
        header('location:ticket.php'); 
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>
