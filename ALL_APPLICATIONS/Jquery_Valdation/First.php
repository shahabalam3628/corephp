<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	
}


?>



<html>
  <title>Javascript Test</title>
   <head>
        <!---CSS-->
		<link rel="stylesheet" href="Bootstrap/other/datepicker_css.css">
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" media="screen" href="Bootstrap/Text_color/screen.css">
		
		 <!---Jquery-->
		<script src="Bootstrap/jquery/jquery.min.js"></script>
		<script src="Bootstrap/other/datepicker_jquery_ui.js"></script>
        <script src="Bootstrap/other/jquery.validate.js"></script>		
		
		
		<!---Javascript-->
		<script src="Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
	     
		<div class="container">
			  
			  <form method="post" id="myform">
			  
			    <div class="form-group">
				  <label for="email">Name:</label>
				  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
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
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
				</div>
				
				<div class="form-group">
				  <label for="pwd">Repassword:</label>
				  <input type="password" class="form-control" id="repassword" placeholder="Enter password" name="repassword">
				</div>
				
			
				<button type="submit" class="btn btn-default" name="submit">Submit</button>
			  </form>
        </div>

		 
     
    </body>
</html>


<script type="text/javascript">
$(document).ready(function(){
$("#myform").validate({
		rules:
		{
				name:"required",
				email:
					{
					required:true,
					email:true
					},
		        mobile:
                    {
					  required:true,
					  number:true,
					  maxlength:10,
					  minlength:10,
					  
					},				

		},
		messages:
		{
				    name:"Must Enter Username",
				    email:
				    {
						required:"Email Is Required",
						email:"Please Input A Valid Email Address"
				    },
					mobile:
					{
					  required:"Please Enter Mobile No",
					  number:"Please Enter only Number.",
					  minlength:"Please Enter Minimum  10 Digit",
				      maxlength:"please Enter Max 10 Digit"
					}
		}	
		
		
		
		
});

});
</script>




