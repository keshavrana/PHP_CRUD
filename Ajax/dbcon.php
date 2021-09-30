<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "crud";

$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("kuch to problem hai daya");
}

?>