<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin_login_page.css">
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


        /* Style the table */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #f4f4f4;
        }

        
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            padding:20px;
            background-color: #333;
            color: white;
        }

        /* Style the delete button */
        .delete-button {
            text-decoration: none;
            color: white;
            background-color: #f44336;
            padding: 5px 15px;
            border-radius: 5px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
    <script>
        // Your JavaScript code here
    </script>
</head>

<body>
    <header>
    
            <div class="logo"> <img src="Tours___Travels_Logo-removebg-preview.png"> </div>
          
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
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'demo');
    ?>

    <?php
    $select = "SELECT * FROM `login`";
    $result = mysqli_query($con, $select);
    $n = mysqli_num_rows($result);

    if ($n >= 1) {
        echo "<table border='2' align='center'>";
        echo "<tr><th colspan='12'>";
        echo "<h3> LOGIN PAGE</h3>";
        echo "</th></tr>";
        echo "<tr><th>ID</th><th>User</th><th>Email</th><th>Password</th><th>Delete</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['user'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a class='delete-button' href='delete_code.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<script>alert('Retry')</script>";
    }
    ?>
</body>

</html>