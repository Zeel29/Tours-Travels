<?php
    $con=mysqli_connect('localhost','root','','demo');
?>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['password'];
$select="INSERT INTO `login`(`user`,`email`,`password`) VALUES ('$n','$e','$p')";
$result=mysqli_query($con,$select);
if($result)
{
    header('location:myedit.php');
}
else
{
    echo "<script>alert('retry')</script>";
}
}
?>