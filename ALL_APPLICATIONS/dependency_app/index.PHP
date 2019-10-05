<?php  include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
  <script src="../Bootstrap/jquery/jquery.min.js"></script>
  <script src="../Bootstrap\js\all_code.js"></script>
  <script src="../Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="email">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
	
	<div class="form-group">
      <label for="email">Bank Name:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
	
	<div class="form-group">
		  <label for="sel1">IFSC Code:</label>
		  <select class="form-control" id="ifsc_code" name="ifsc_code" onchange="get_bank_datails()">

		<?php  
             $query="SELECT DISTINCT(bank_ifsc_code) FROM banks;";
			 $fetch_all=$con->query($query);
			 while($row=$fetch_all->fetch_array())
			 {
		?>
			<option value="<?php echo $row['bank_ifsc_code'] ?>"><?php echo $row['bank_ifsc_code'] ?></option>
	    <?php }?>	
		  </select>
    </div> 
	
    <div class="form-group">
      <label for="email">Branch Code:</label>
      <input type="text" class="form-control" id="branch_code" placeholder="Enter Mobile" name="branch_code">
    </div>
	
	<div class="form-group">
      <label for="email">MICR Code:</label>
      <input type="text" class="form-control" id="micr_code" placeholder="Enter Mobile" name="micr_code" value="">
    </div>
	
	<div class="form-group">
      <label for="email">Bank Mobile No:</label>
      <input type="text" class="form-control" id="bak_mobile_no" placeholder="Enter Mobile" name="bak_mobile_no">
    </div>
	
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_form_basic&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 11:05:43 GMT -->
</html>
