<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
    <link rel="stylesheet" href="admin_login_page.css">
    <link rel="stylesheet" href="uplodar.css">
    
    <style>
        /* Style the header */
        body{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .logo img {
        float:left;
        margin-left: 2rem;
        height: 8rem;
        width: 12.5rem;
        }
        .main-content{
            height: 7.4rem;
        }
        /* Style the navigation links */
        .nav {
            list-style-type: none;
            padding: 0;
            text-align: center;
            display: flex;
            /* Display the links in a horizontal row */
            justify-content:right;
            margin-right:5rem;
            /* Center-align the links horizontally */
        }
        .nav li {
            margin-right: 10px;
            /* Add some space between the links */
        }

        .nav a {
            text-decoration: none;
            color: #333;
            background-color: #f4f4f4;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .nav a:hover {
            border-radius: 5px;
            background-color: #555;
            color: white;
        }

        /* Style the form container */
        .form-container {
            width: 70%;
            margin: 20px auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Style form fields */
        .info {
            margin-bottom: 20px;
        }

        .info label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .info input[type="text"],
        .info input[type="number"],
        .info select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style the submit button */
        .Button {
            text-align: center;
            margin-top: 20px;
        }

        .Button input[type="submit"] {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .Button input[type="submit"]:hover {
            background-color: #d32f2f;
        }
    </style>
 
</head>

<body>
    <header>
    <div class="logo"> <img src="Tours___Travels_Logo-removebg-preview.png"></div>
        <div class="main-content">
            <div class="nav-div">
                <ul class="nav">
                    <li><a href="admin.php" class="n-i">Admin</a></li>
                    <li><a href="ticket.php" class="n-i">Ticket</a></li>
                    <li><a href="uplodar.php" class="n-i">Ticket Upload</a></li>
                    <li><a href="full_details.php" class="n-i">Full Details</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="form-container">
        <form method="POST">
            <div class="info">
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" required/>
            </div>
            <div class="info">
                <label for="day">Days:</label>
                <input type="number" id="day" min="1" name="day" required/>
            </div>
            <div class="info">
                <label for="hotelName">Select a Hotel:</label>
                <select id="hotelName" name="hotelName" required>
                    <option value="hotel1">Hotel 1</option>
                    <option value="hotel2">Hotel 2</option>
                    <option value="hotel3">Hotel 3</option>
                    <option value="hotel4">Hotel 4</option>
                    <option value="hotel5">Hotel 5</option>
                    <option value="hotel5">Book your own hotel</option>
                </select>
            </div>
            <div class="info">
                <label for="hotelRoom">Select a Hotel Room:</label>
                <select id="hotelRoom" name="hotelRoom" required>
                    <option value="suite">Suite</option>
                    <option value="presidentialSuite">Presidential Suite</option>
                    <option value="executiveSuite">Executive Suite</option>
                    <option value="familyRoom">Family Room</option>
                    <option value="motel">Motel</option>
                </select>
            </div>
            <div class="info">
                <label for="total">Person:</label>
                <input type="number" id="total" min="0" name="total" required/>
            </div>
            <div class="info">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" pattern="[0-9]+" title="Please enter only numbers" required />
            </div>
            <div class="info">
                <label for="description">Description:</label>
                <textarea name="description" required cols="40" rows="5"></textarea> 
            </div>
            <div class="Button">
                <input type="submit" name="submit" value="Submit" required/>
            </div>
        </form>
    </div>
</body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", "", "demo");
?>

<?php
$connection = mysqli_connect("localhost", "root", "", "demo");
?>

<?php
if(isset($_POST['submit']))
{
    $pl=$_POST['place'];
    $d=$_POST['day'];
    $h=$_POST['hotelName'];
    $r=$_POST['hotelRoom'];
    $p=$_POST['total'];
    $pr=$_POST['price'];
    $desc=$_POST['description']; // Corrected variable name

    $select = "INSERT INTO `hotel`(`place`, `days`, `hotel`, `room`, `person`, `price`, `description`) VALUES ('$pl', $d, '$h', '$r', $p, '$pr', '$desc')";
    
    $result = mysqli_query($connection, $select);
    
    if($result == true)
    {
        echo "<script>alert('Uploaded')</script>";
    }
    else
    {
        echo "<script>alert('Retry')</script>";
    }
}
?>

