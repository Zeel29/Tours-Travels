<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin_login_page.css">
    <style>
        /* Style the form container */
        body{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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

        .form-field input[type="text"] {
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
            border:none;
            padding:13px;
            
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

    $selectQuery = "SELECT * FROM `login` WHERE id = $id";
    $result = mysqli_query($con, $selectQuery);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Record not found.";
        exit;
    }

    echo "<div class='form-container'>";
    echo "<form action='update.php' method='post'>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<div class='form-field'>
            <label for='user'> <h4>User:</h4></label>
            <input type='text' name='user' value='" . $row['user'] . "'>
          </div>";
          echo "<div class='form-field'>
          <label for='firstname'> <h4>Place:</h4></label>
          <input type='text' name='firstname' value='" . $row['firstname'] . "'>
        </div>";
        echo "<div class='form-field'>
        <label for='email'><h4> Email:</h4></label>
        <input type='text' name='email' value='" . $row['email'] . "'>
      </div>";
          echo "<div class='form-field'>
            <label for='user'> <h4>Phone No:</h4></label>
            <input type='text' name='mail' value='" . $row['phonenumber'] . "'>
          </div>";
    echo "<div class='form-field'>
            <label for='email'><h4> Address:</h4></label>
            <input type='text' name='address' value='" . $row['address'] . "'>
          </div>";
    echo "<div class='form-field'>
            <label for='city'> <h4> City: </h4></label>
            <input type='text' name='city' value='" . $row['city'] . "'>
          </div>";
    echo "<div class='form-field'>
            <label for='state'> <h4> State: </h4></label>
            <input type='text' name='state' value='" . $row['state'] . "'>
          </div>";
          echo "<div class='form-field'>
            <label for='state'> <h4> Pin Code: </h4></label>
            <input type='text' name='pcod' value='" . $row['pcode'] . "'>
          </div>";
    echo "<div class='form-field'>
            <label for='country'> <h4>Country: </h4></label>
            <input type='text' name='country' value='" . $row['country'] . "'>
          </div>";
          echo "<div class='form-field'>
            <label for='state'> <h4> Check_in_date: </h4></label>
            <input type='date' name='date' value='" . $row['Check_in_date'] . "'>
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