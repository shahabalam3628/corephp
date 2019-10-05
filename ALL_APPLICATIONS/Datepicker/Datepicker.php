<html>
  <title>Javascript Test</title>
   <head>
        <!----These File must be included for datepicker---->
		<link rel="stylesheet" href="Bootstrap/other/datepicker_css.css">
		<script src="Bootstrap/jquery/jquery.min.js"></script>
		<script src="Bootstrap/other/datepicker_jquery_ui.js"></script>	
    </head>
    <body>
     <p>Date: <input type="text" id="datepicker"></p>
    </body>
</html>




  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>