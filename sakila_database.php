<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sakila";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}else{
    echo "connected successfully";
}
?>