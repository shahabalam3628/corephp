<?php  include("Students.php");
$fetch=new Students();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
  <script src="../Bootstrap/jquery/jquery.min.js"></script>
  <script src="../Bootstrap\js\all_code.js"></script>
  <script src="../Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-full">
  <h2>Bordered Table</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
		<th>Name</th>
        <th>Email</th>
		<th>Address</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
	<?php
	  $get=$fetch->select_data();
	  $i=1;
	  while($row=$get->fetch_array())
	  {
	     //print_r($row);
	?>
      <tr>
        <td><?php echo $i; ?></td>
		<td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
		<td><a href="update_student.php?student_id=<?php echo $row['auto_id']; ?>">Edit</a></td>
		<td><a href="">Delete</a></td>
      </tr>
	  <?php $i++; } ?>
    </tbody>
  </table>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_bordered&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 11:05:48 GMT -->
</html>
