<?php
include "dbcon.php";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO `student` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($conn,$sql);
}
?>