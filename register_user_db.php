<?php
include "connect_db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$pass =  $_POST["pwd"];

$sql = "INSERT INTO `register_user` VALUES ('$name','$email','$pass')";
if ($conn->query($sql) === TRUE) {
    header('Location:/index.php?success=reg');
  } else {
    echo "<script>alert('This email already exist!');</script>";
    header('Location:register.html');
  }
  

  $conn->close();
?>