<?php
    $con=mysqli_connect('localhost','root','','demo');
?>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$p=$_POST['password'];
$select="SELECT * FROM `login` WHERE user='$n' or email='$n' and password='$p'";
$result=mysqli_query($con,$select);
$n=mysqli_num_rows($result);
if($n>=1)
{
    header('location:myedit.php');
}
else
{
    echo "<script>alert('retry')</script>";
}
}
?>