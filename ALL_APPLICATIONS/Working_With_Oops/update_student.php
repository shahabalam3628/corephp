<?php  
include("Students.php");
$fetch=new Students();
$student_id=$_GET['student_id'];
$fetch_row=$fetch->get_student_details($student_id);
$fetch_row=$fetch_row->fetch_array();


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
</body>

<div class="container">
  <form method="post"  action="Students.php/update_student_details/">
    
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $fetch_row['name'] ?>">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $fetch_row['email'] ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <textarea class="form-control" id="address" placeholder="Enter Address" name="address"><?php echo $fetch_row['address'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-default" name="update">Submit</button>
  </form>
</div>

</html>
