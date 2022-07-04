<?php
include "db.php";

$un=$_POST["username"];
$email=$_POST["email"];
$pwd=$_POST["password"];

$sql="INSERT INTO `register`(`username`, `email`, `password`) VALUES ('$un','$email','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:index.php");
} 
else{
    echo "error";
}
?>
