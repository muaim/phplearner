<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  
  </style>
</head>
<body>
<div class="container">
 
  <h2>Login Yourself</h2>
  <form class="form-horizontal" action="login.php" method="POST">
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <p>If you dont have account <a href="register.html">register</a> yourself</p>
      </div>
    </div>
  </form>
</div>
</p>
<?php
$err = filter_input(INPUT_GET, 'error');
if ($err === "login") echo "<script>alert('Invalid login!');</script>";
$err = filter_input(INPUT_GET, 'success');
if ($err === "reg") echo "<script>alert('You are registered sucessfully!');</script>";
?>

</body>
</html>
