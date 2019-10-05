function get_bank_datails()
{
	var ifsc_code = $("#ifsc_code").val();
				$.ajax({
		                 type:"POST",
		                 url:"get_bank_details.php",
			             data:"ifsc_code="+ifsc_code,
			             success:function(response)
			             {
                            var user = JSON.parse(response);
							//alert(response);
							$("#branch_code").val(user.bank_brach_code);
							$("#micr_code").val(user.bank_mircr_code);
							$("#bak_mobile_no").val(user.bank_contact_no);
							
			             }	 
		    });
}