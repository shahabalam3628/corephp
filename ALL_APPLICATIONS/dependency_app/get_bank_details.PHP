<?php
include ("connection.php");
$ifsc_code= $_POST['ifsc_code'];
$SELECT="SELECT * FROM banks WHERE bank_ifsc_code='$ifsc_code'";
$fetch=$con->query($SELECT);
$get_data=$fetch->fetch_array();
echo json_encode($get_data);

?>