<?php
session_start();

$con = mysqli_connect("localhost", "root", "123456");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$pass=$_POST['password'];
$s ="select * from usertable where name='$name' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
              $_SESSION['username']=$name;
              header('location:ashaphe.php');         
}else{
              header('location:vaologin1.php');
}
?>
