<?php
$con=mysqli_connect("localhost","root","","she");
if($con){
echo "connected";
}
else{
    echo "check your connection";
}
?>