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
  <label for="sel1">State:</label>
  <select class="form-control" id="state" onchange="get_city()">
  <?php 
    $query=$con->query("select * from state");
	while($fetch=$query->fetch_array())
	{
     ?>
    <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['state']; ?></option>  
	<?php } ?>
	
  </select>
</div> 
 <div class="form-group">
  <label for="sel1">City:</label>
  <select class="form-control" id="city">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>     
  </form>
</div>
</body>
</html>

<script>
function get_city()
{
	var id ("#state").val();
	alert(id);
	
}

</script>
