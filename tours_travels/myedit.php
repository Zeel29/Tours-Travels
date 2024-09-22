<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <title>Travels & Tours</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="myyyedit.css"/>
    
</head>
<body>
    <header>
        <div class="logo"> <img src="Tours___Travels_Logo-removebg-preview.png">
        </div>
    <div class="main-content">
        <div class="nav-div">
            <div class="nav">
                <a href="myedit.php" class="n-i" class="link-d"> Home </a>
                <a href="ticket_test.php" class="n-i"> Tour  </a>
                <a href="about.php" class="n-i"> About </a>
                <a href="contact.php"class="n-i"> Contact </a>
            </div>
        </div>
        
        <div class="main">
            <div class="explore">
            <span class="span"> Explore </span> <br>
                your amazing city
            </div>
            <div class="explore-2">
                Find great places to stay, eat, shop or visit from local experts.
            </div>
            


            <div class="text">
                <form method="POST">
                    <input type="text" placeholder="Username" class="form-control" name="name"/>
                    <input type="password" placeholder="Password" class="form-control"name="password"/>

                    <button type="submit" class="btn btn-danger" name="submit">Search</button>
                </form>
            </div>

         
           
            <?php
$con = mysqli_connect('localhost', 'root', '', 'demo');

if (isset($_POST['submit'])) {
    echo"<div class='tableeee'>";
    $n = $_POST['name'];
    $p = $_POST['password'];
    $selectQuery = "SELECT * FROM `login` WHERE (user='$n' OR email='$n') AND password='$p'";
    $result = mysqli_query($con, $selectQuery);
    if ($result == true) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Place</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Password</th>
                </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['user'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phonenumber'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['pcode'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Query failed: " . mysqli_error($con);
    }
    echo"</div>";
}
?>
        
            
          
            <div class="links">
                <span style="font-size:1.1rem;">Or browse the highlights</span>
                <div class="nav-link">
                    <a href="https://www.thomascook.in/  " class="box-explore"><i class="fa-solid fa-plane-departure"></i> Flights</a>
                    <a href="https://www.google.com/maps/search/restaurants+near+me/@22.3301325,71.3265341,7z?entry=ttu" class="box-explore"><i class="fa-solid fa-utensils"></i> Restaurant</a>
                    <a href="ticket_test.php" class="box-explore" target="_blank"> <i class="fa-solid fa-hotel"></i> Resorts</a>
                    <a class="box-explore" href="https://www.thediscoveriesof.com/travel-bucket-list-100-things-to-do-before-you-die/"> <i class="fa-solid fa-location-dot"></i>Places</a>  
                </div>
            </div>
        </div>
    </div>
    </header>
    <footer>
    <div class="features">
        <div class="card">
            <p> <img src="images (5).jpeg" class="cardlogo">  </p>
            <h5>Best Price Guarantee</h5>
            <p>We guarantee the best prices for your travel bookings.</p>
        </div>

        <div class="card">   
            <p> <img src="red-heart-icon-on-white-background-love-logo-heart-illustration-free-vector-removebg-preview.png  " class="cardlogo one">  </p>
            <h5>Travellers Love Us </h5>
            <p>We guarantee the best prices for your travel bookings.</p>
        </div>

        <div class="card">
            <p> <img src="mybrian-relecture-correction-1-1-removebg-preview.png" class="cardlogo">  </p>
            <h5>Best Travel Agent</h5>
            <p>We guarantee the best prices for your travel bookings.</p>
        </div>

        <div class="card">
            <p> <img src="PngItem_2203215.png" class="cardlogo">  </p>
            <h5>Our Dedicated Support</h5>
            <p>We guarantee the best prices for your travel bookings.</p>
        </div>
    </div>
</footer>
</body>
</html>