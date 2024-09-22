<?php
$con = mysqli_connect('localhost', 'root', '', 'demo');
?>

<?php
// <link rel="stylesheet" href="admin.css">
$select = "SELECT * FROM `login`";
$result = mysqli_query($con, $select);
$n = mysqli_num_rows($result);

if ($n >= 1) {
    echo "<table border='2' align='center'>";
    echo "<tr><td colspan='12'>";
    echo "<h1 align='center'>Admin</h1>";
    echo "</td></tr>";
    echo "<tr><td>id</td><td>firstname</td><td>user</td><td>email</td><td>phonenumber</td><td>address</td><td>city</td><td>state</td><td>pcode</td><td>country</td><td>password</td><td>Delete</td></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<div>" . $row['id'] . "</div>";
        echo "<div>" . $row['firstname'] . "</div>";
        echo "<div>" . $row['user'] . "</div>";
        echo "<div>" . $row['email'] . "</div>";
        echo "<div>" . $row['phonenumber'] . "</div>";
        echo "<div>" . $row['address'] . "</div>";
        echo "<div>" . $row['city'] . "</div>";
        echo "<div>" . $row['state'] . "</div>";
        echo "<div>" . $row['pcode'] . "</div>";
        echo "<div>" . $row['country'] . "</div>";
        echo "<div>" . $row['password'] . "</div>";
        echo "<div><a href='#'>Delete</a></div>";
        echo "</div>";
    }
    
    echo "</table>";
} else {
    echo "<script>alert('retry')</script>";
}
?>
