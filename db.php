<?php
$con=mysqli_connect("localhost","root","","shetech");
if($con){
 echo "connected";
}
else{
echo "check your connection";
}
?>