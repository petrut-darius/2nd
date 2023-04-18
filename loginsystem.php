<?php 
require "conect.php";


$name = $_POST['nume'];
$username = $_POST['username'];
$email  = $_POST['email'];
$password = $_POST['parola'];

$sql = "INSERT INTO userinfo (Numecomplet , username , email , password) VALUES ('$name' , '$username' , '$email' , '$password')";
$result = mysqli_query($conect,$sql);
header("Location:https://www.instagram.com/petrut_.darius/");