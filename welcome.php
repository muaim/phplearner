<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1><?php  echo "Welcome " . $_SESSION["name"] ; ?>, You are logged in successfully</h1>
</body>
</html>