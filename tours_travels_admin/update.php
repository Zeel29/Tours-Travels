<?php
$con = mysqli_connect('localhost', 'root', '', 'demo');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    // Perform the database update
    $updateQuery = "UPDATE `login` SET firstname='$firstname', user='$user', email='$email', city='$city', state='$state', country='$country' WHERE id = $id";
    
    if (mysqli_query($con, $updateQuery)) {
        header('location:ticket.php');
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>
