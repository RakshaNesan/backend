<?php
session_start();
include "db.php";

$un=$_POST["username"];
$pwd=$_POST["password"];

$sql="select * from login where username='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if ($count>0){
    header("location:home.php");
    $_SESSION["username"]=$un;
}
else {
    header("location:index.php");
}
?>  