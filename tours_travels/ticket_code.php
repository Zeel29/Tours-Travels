<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <title>Travels & Tours</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="td.css"/>
</head>
<body>
    <header>
    <div class="main-content">
        <div class="nav-div">
            <div class="nav">
                <a href="myedit.php"> Home </a>
                <a href="about.php"> About </a>
                <a href="ticket_test.php"> Tour  </a>
                <a href="contact.php"> Contact </a>
            </div>
        </div>
<?php
    $con=mysqli_connect('localhost','root','','demo');
?>
<?php
if(isset($_POST['submit']))
{
$fn=$_POST['fname'];
$email=$_POST['mail'];
$ln=$_POST['lname'];
$m=$_POST['mail'];
$p=$_POST['phone'];
$add=$_POST['SA'];
$c=$_POST['city'];
$st=$_POST['state'];
$pc=$_POST['pcode'];
$co=$_POST['country'];
$date=$_POST['date'];
$insert = "UPDATE `login` SET 
    `firstname`='$fn',
    `phonenumber`='$p',
    `address`='$add',
    `city`='$c',
    `state`='$st',
    `pcode`='$pc',
    `country`='$co',
    `Check_in_date`='$date'
    WHERE `user`='$ln' OR `email`='$email'";
$q=mysqli_query($con,$insert);

if($q==true)
{
    echo"<div class='main'>";
    echo"<div class='explore'>";
    echo"<span class='span'> Confirmation </span>";
    echo"</div>";
    echo"<hr>";
    echo"<div class='explore-2'>";
    echo"<p class='pc'>Your order is completed and received, and a confirmation email was sent to you. You will pay the full amount later. Thank you!</p>";
    echo"</div>";
    echo"<div class='features'>";
    echo"<h3>   <div class=''>";
    echo"   Date:";
    echo"       <br>";
    echo"<p id='currentDate'></p>";
$currentDate = date("l, F j, Y");
echo "<script>";
echo "var currentDateElement = document.getElementById('currentDate');";
echo "currentDateElement.textContent = ' " . $currentDate . "';";
echo "</script>";
    echo"  </h3> </div>";
    echo"</div>";
    echo"<div class='m-details'>";
    echo"   <div class='page'>";
    echo"   <h1>";
    echo"       ORDER DETAILS";
    echo"   </h1>";
    echo"   <hr class='hr1'>";
    echo"       <h5>";
    echo"           Hey ".ucfirst($ln); 
    echo"       </h5>";
    echo"   <hr class='hr1'>";
    echo"       <h5>";
    echo"           Place:  $fn"; 
    echo"       </h5>";
    echo"   <div class='details'>";
    echo"       <p class='size'><b>Date:$date</p>";
    echo"   </div>";
    echo"   <div class='details'>";
    echo"       <p class='size'><b>Phone No:</b>$p</p>";
    echo"   </div>";
    echo"   <div class='details'>";
    echo"       <p class='size'><b>Address:<br></b>$add,".$c.",<br>".$st.",".$pc."</p>";
    echo"   </div>";
    echo"  </div>";
    echo"</div>";
    echo"</div>";   
}
else
{
    echo "<script>alert('retry')</script>";
}
}
?>
</div>
    </header>
<footer>

</footer>
</body>
</html>
