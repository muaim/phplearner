<?php
$sever="localhost";
$user="root";
$password="cricinfo123@";
$db_name="phplearner";
$conn = new mysqli($server,$user,$password,$db_name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>