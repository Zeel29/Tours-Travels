<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin_login_page.css">
    <style>
        /* Style the form container */
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .form-container {
            width: 60%;
            margin: 20px auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }

        /* Style form fields */
        .form-field {
            margin-bottom: 10px;
        }

        .form-field label {
            display: block;
            font-weight: bold;
        }

        .form-field input[type="text"],
        .form-field input[type="number"],
        .form-field textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style the submit button */
        .submit-button {
            text-decoration: none;
            color: white;
            background-color: #f44336;
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            padding: 13px;
        }

        .submit-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
<?php
$con = mysqli_connect('localhost', 'root', '', 'demo');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $selectQuery = "SELECT * FROM `hotel` WHERE id = $id";
    $result = mysqli_query($con, $selectQuery);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Record not found.";
        exit;
    }

    echo "<div class='form-container'>";
    echo "<form action='update1.php' method='post'>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";

    echo "<div class='form-field'>
            <label for='place'><h4>Place:</h4></label>
            <input type='text' name='place' value='" . $row['place'] . "' >
          </div>";

    echo "<div class='form-field'>
          <label for='days'><h4>Days:</h4></label>
          <input type='number' min='0' max='30' name='days' value='" . $row['days'] . "' >
        </div>";

    echo "<div class='form-field'>
          <label for='hotelName'><h4>Select a Hotel:</h4></label>
          <select id='hotelName' name='hotelName' >
            <option value='hotel1' " . ($row['hotel'] == 'hotel1' ? 'selected' : '') . ">Hotel 1</option>
            <option value='hotel2' " . ($row['hotel'] == 'hotel2' ? 'selected' : '') . ">Hotel 2</option>
            <option value='hotel3' " . ($row['hotel'] == 'hotel3' ? 'selected' : '') . ">Hotel 3</option>
            <option value='hotel4' " . ($row['hotel'] == 'hotel4' ? 'selected' : '') . ">Hotel 4</option>
            <option value='hotel5' " . ($row['hotel'] == 'hotel5' ? 'selected' : '') . ">Hotel 5</option>
            <option value='Book your own hotel' " . ($row['hotel'] == 'Book your own hotel' ? 'selected' : '') . ">Book your own hotel</option>
          </select>
        </div>";

    echo "<div class='form-field'>
          <label for='hotelRoom'><h4>Select a Hotel Room:</h4></label>
          <select id='hotelRoom' name='hotelRoom' >
            <option value='suite' " . ($row['room'] == 'suite' ? 'selected' : '') . ">Suite</option>
            <option value='presidentialSuite' " . ($row['room'] == 'presidentialSuite' ? 'selected' : '') . ">Presidential Suite</option>
            <option value='executiveSuite' " . ($row['room'] == 'executiveSuite' ? 'selected' : '') . ">Executive Suite</option>
            <option value='familyRoom' " . ($row['room'] == 'familyRoom' ? 'selected' : '') . ">Family Room</option>
            <option value='motel' " . ($row['room'] == 'motel' ? 'selected' : '') . ">Motel</option>
          </select>
        </div>";

    echo "<div class='form-field'>
          <label for='person'><h4>Person:</h4></label>
          <input type='number' min='0' name='person' value='" . $row['person'] . "'>
        </div>";

    echo "<div class='form-field'>
          <label for='price'><h4>Price:</h4></label>
          <input type='text' name='price' value='" . $row['price'] . "'>
        </div>";

    echo "<div class='form-field'>
          <label for='description'><h4>Description:</h4></label>
          <textarea cols='40' rows='5' name='description'>" . $row['description'] . "</textarea>
        </div>";

    echo "<input class='submit-button' type='submit' name='submit' value='Update'>";
    echo "</form>";
    echo "</div>";
} else {
    echo "Invalid request.";
}
?>
</body>
</html>
