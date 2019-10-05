<?php
//include("connection.php");

if(isset($_POST['submit']))
{
   $mobile=$_POST['mobile'];
   $message=$_POST['message'];
   
   $url="";
   $username="";
   $pass="";
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>API Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>





<div class="container">
  <form method="post">
    
	<div class="form-group">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
 
    <div class="form-group">
      <label for="email">Message:</label>
      <input type="email" class="form-control" id="message" placeholder="Enter Message" name="message">
    </div>


    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
