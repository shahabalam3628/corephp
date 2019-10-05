<?php
include("connection.php");

$id=$_POST['id'];

$sql="select * from mytable where id=$id";
$select=$con->query($sql);
$row=$select->fetch_array();  //must be array becouse access by name in ajax response;
echo json_encode($row);


?>