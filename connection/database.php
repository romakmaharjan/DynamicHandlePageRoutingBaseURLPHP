<?php

$host="localhost";
$user="root";
$password= "";
$database= "newswebsite";

$conn= mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}

?>