<!----custom code--->
									<html>
									<head>
									<script type="text/javascript">
                                       function goToNewPage()
                                             {
                                                  var url = document.getElementById('list').value;
                                                   if(url != 'none') 
			                                             {
                                                         window.location = url;
                                                         }
                                               }
                                    </script>

									</head>
									<body>
							
									<select name="list" id="list" accesskey="target">
									<option value="rpt_pdf_users.php" selected>PDF</option>
									<option value="rpt_excel_users.php">Excel</option>
									</select> 
									<input type="button" value="Export" onclick="goToNewPage()">
									
									</body>
									</html>
	