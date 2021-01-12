<?php
session_start();
include "connect_db.php";
$email = $_POST["email"];
$pass = $_POST["pwd"];
$sql = "SELECT name FROM register_user WHERE email = '$email' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["name"] = $row["name"];
    //echo "name is " . $_SESSION["name"] . ".<br>";
    header('Location: /welcome.php');
  }
} else {
    header("Location:index.php?error=login");
}
$conn->close();
?>