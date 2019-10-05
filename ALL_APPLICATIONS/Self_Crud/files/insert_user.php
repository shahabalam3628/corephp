<?php
include("connection.php");

if(isset($_POST['name']) && $_POST['email'] && $_POST['mobile'] && $_POST['message'])
{


$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$sql="insert into mytable (name,email,mobile,message) values('$name','$email','$mobile','$message')";
$insert=$con->query($sql);
if($insert)
{
  echo "Record Inserted";
}else
{
 echo "Record Not Inserted.";
}






}





?>