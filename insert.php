<?php
include "db.php";

$un=$_POST['username'];
$pwd=$_POST['password'];

$sql="insert into login(username,password) values('$un','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:index.php");
}
else{ echo "error";
}
?>