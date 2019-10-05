<?php 
include("config.php");
include("lock.php");
include("includes/function.php");
$image_id=$_GET['image_id'];
$sql=mysql_query("select * from  user_travel_days where id='$image_id'");
$get_id=mysql_fetch_array($sql);

if(isset($_POST['submit']))
	{
		
	     $travel_img=$_FILES['travel_image']['name'];
		 $file_type=strtolower(end(explode('.',$event_img)));
         $location="upload_images/".$travel_img;
		 $file_size =$_FILES['travel_image']['size'];	
		 $description=prepStr($_POST['travel_descrip']);
		(!empty($travel_img) ? $travel_img : $travel_img=$_POST['travel_image_hidden']);		
	     $res="update  user_travel_days set 
									   
									   image='$travel_img',
									   description='$description'
							           where id='$image_id'
									";
						
	         $query=mysql_query($res);		
	         if($query)
	            {
	               if(!empty($_FILES['travel_image']['name'])){
				   $upload1=move_uploaded_file($_FILES['travel_image']['tmp_name'],$location);
				
			    }
			   
			   

				 $_SESSION['win']="updated  successfully";	 
				 @header("location:view_travel_details.php?user_id=".$get_id['user_id']."");
	             }
	             else
	              {
	    		    $_SESSION['winn']="Can't Update  detail.There were some error";	 
	              } 
  }
		 
		 
	
   
   
   
   	//====================================  muliple video url =====================================//	
	     
		 
		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.0.js"> </script>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<title>
<?=$title?>
</title>
<script type="text/javascript">

$(document).ready(function(e) {
    
	$("#submits").click(function(e) {
        
		
		var name=$("#name").val();
		var email=$("#email").val();
		var mobile=$("#mobile").val();
		var message=$("#message").val();
		
		
		if(name=='')
		{
			alert("name is required");
			$("#name").focus();
			return false;
		}
		else if(email=='')
		{
			alert("email is required");
			$("#email").focus();
			return false;
		}
	
		
		
    });
	
});



</script>
<script type="text/javascript">



/*=======================================
 Jquery Cloning Script for Vedio Urls
=========================================*/
$(document).ready(function(e) {
    $("#add_more").click(function(ev){
	ev.preventDefault();
    // Limt 
	var count =  new Date().getTime(); 
	
	// Cloning Row
	var tr=$("#cr_1").clone();
	
	tr[0].setAttribute('id', "cr" + "_" + count);
    
	tr.find(":text,td,tr").each(function(index, element) {
        if($(this).attr("id"))
		     {
				// Renaming Id
				var str=$(this).attr("id");
				var id=str.split('_');
				$(this).attr("id",id[0]=id[0]+"_"+count);
			 }
    });
	tr.find(":text").val('');
	
	var del='<a href="#" class="delete_tr"><img src="images/delete.png" alt="" width="16" height="16" /></a>';
	
	tr.children("td:last").html(del);	
	$("#tb").append(tr);
	})
});

/*=======================================
 Jquery : Deletion of Row
==========================================*/
$(document).ready(function(e) {
$("#tb").delegate(".delete_tr","click",function(e){
e.preventDefault();
var tr=$(this).closest("tr");
tr.remove();	
});
});

/*====== for you tube add more*/
$(document).ready(function(e) {
    $("#add_more_video").click(function(ev){
	ev.preventDefault();
    // Limt 
	var count =  new Date().getTime(); 
	
	// Cloning Row
	var tr=$("#ur_1").clone();
	
	tr[0].setAttribute('id', "ur" + "_" + count);
    
	tr.find(":text,td,tr").each(function(index, element) {
        if($(this).attr("id"))
		     {
				// Renaming Id
				var str=$(this).attr("id");
				var id=str.split('_');
				$(this).attr("id",id[0]=id[0]+"_"+count);
			 }
    });
	tr.find(":text").val('');
	
	var del='<a href="#" class="delete_tr"><img src="images/delete.png" alt="" width="16" height="16" /></a>';
	
	tr.children("td:last").html(del);	
	$("#tb2").append(tr);
	})
});

/*=======================================
 Jquery : Deletion of Row
==========================================*/
$(document).ready(function(e) {
$("#tb2").delegate(".delete_tr","click",function(e){
e.preventDefault();
var tr=$(this).closest("tr");
tr.remove();	
});
});

/*=======================================
 Jquery : For Form Validation
=========================================*/



// Function to validate youtube vedio

 function valVedio()
     {
var count=1;
var error=0;
$("#tb").children("tr").each(function()
  {
  //====================//	
 // Getting Index      //
//====================// 
  var index=$(this).attr("id").split("_").pop();
  if(index== undefined)
      index=1;
//========================	
  if($("#vediourl_"+index).val()!="" && $("#vediourl_"+index).val().indexOf('www.youtube.com')== -1)
	  {
	  alert("Please enter valid youtube vedio url in "+count);
	  error++;
	  $("#vediourl_"+index).focus();
	  return false;
	  }
	 
	count++; 
 });
	 
   if(error>0)
	return false;
	else
	return true; 
 }

// Function to validate event ticket
 function valTicket()
     {
var count=1;
var error=0;
$("#tb2").children("tr").each(function()
  {
  //====================//	
 // Getting Index      //
//====================// 
  var index=$(this).attr("id").split("_").pop();
  if(index== undefined)
      index=1;
//========================	
   if($("#ticketname_"+index).val()=="")
     {
	  alert("Please enter "+count+" ticket name ");
	  error++;
	  $("#ticketname_"+index).focus();
	  return false;
	 }
   else if($("#ticketprice_"+index).val()=="")
     {
	  alert("Please enter "+count+" ticket price ");
	  error++;
	  $("#ticketprice_"+index).focus();
	  return false;
	 }
   else if(isNaN($("#ticketprice_"+index).val())==true)
     {
	  alert("Please enter only number in "+count+" ticket price ");
	  error++;
	  $("#ticketprice_"+index).focus();
	  return false;
	 }
   else if($("#ticketdiscount_"+index).val()=="")
     {
	  alert("Please enter "+count+" ticket loyalty discount ");
	  error++;
	  $("#ticketdiscount_"+index).focus();
	  return false;
	 }
   else if(isNaN($("#ticketdiscount_"+index).val())==true)
     {
	  alert("Please enter only number in "+count+" ticket price loyalty discount ");
	  error++;
	  $("#ticketdiscount_"+index).focus();
	  return false;
	 }

	count++; 
 });
	 
   if(error>0)
	return false;
	else
	return true; 
 }


 function Checkfiles(fileName)
	{
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
var ext = ext.toLowerCase();
if(ext == "gif" || ext == "jpeg" || ext == "jpg" || ext == "png")
	{
	return true;
	} 
	else
	{
	return false;
	}
  }	



$(document).ready(function(e) {
    
	$("#sub").click(function(e) {
        
		var speciality=$("#speciality").val();
		var name=$("#name").val();
		var qual=$("#qualification").val();
		var desig=$("#designation").val();
		var descp=$("#descp").val();
		var des=document.getElementById("aa").value;
		var image=$("#image").val();
		var experience=$("#experience").val();
		
		
		if(speciality=="")
		{
			alert("Medical Speciality is required");
			$("#speciality").focus();
			return false;
		}
		else if(name=="")
		{
			alert("Doctor name is required");
			$("#name").focus();
			return false;
		}
		else if(qual=="")
		{
			alert("Qualification is required");
			$("#qualification").focus();
			return false;
		}
		
	
		
		
    });
	
});

$(document).ready(function(e) {
    $(".del_url").click(function(e) {
        
	e.preventDefault();
	r =confirm('Are you sure delete');
	if(r==true)
	{
		var t=$(this);
		var url=$(this).attr("href");
		var id=$(this).attr("data-id");
		//var tr=$(this).closest("tr");
		var tr=$(this).closest(".tb2");
		
		
		
		delrjdes(id,url)
		tr.remove();
	}
    });
});


function delrjdes(id,type)
	{
		$.post('del_doctor.php',{deleteid:id,deltype:type},function(data)
				{
				});
	}


</script>

<? include("includes/editor.php");?>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tr>
    <td align="center" valign="top" class="top_bg1"><? include("includes/top.php");?></td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="20"><? include("includes/left.php");?></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="20"><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
               <div style="color:red;text-align:center;"><?php if(isset($error)) echo $error;?>
                <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="top_heading_box">Edit Events</td>
                    </tr>
                    <tr>
                      <td height="380" align="left" valign="top" class="bottom_box">
                      <?php
					  $query="select * from   user_travel_days where id=$image_id";
					  $run=mysql_query($query);
					  $row=mysql_fetch_array($run);					  
					  ?>
                      
                      <form method="post" enctype="multipart/form-data">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="center" class="alert_msg"><?php  if(!empty($_SESSION['winn']))
								  {
							   echo $_SESSION['winn'];
							   unset($_SESSION['winn']); 
							   }
							   ?></td>
                                  </tr>
                                  <tr>
                                    <td align="right" class="alert_msg"></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#D2D2D2"><table width="100%" border="0" cellspacing="1" cellpadding="3">

                                        <tr>
                                          <td bgcolor="#F0F0F0">Travel Image</td>
                                          <td bgcolor="#F0F0F0"><span class="content">
    <input type="hidden" name="travel_image_hidden" value="<?=$row['image']?>">      
    <input name="travel_image"  type="file" class="content" id="travel_image" style="width:250px;"/>
                                            </span>
                                            <img src="upload_images/<?=$row['image']?>" width="80" height="50">
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                        
                                        
                                        <tr>
                                          <td bgcolor="#F0F0F0">Description</td>
                                          <td bgcolor="#F0F0F0"><span class="content">
                                       
    <textarea name="travel_descrip"   class="content" id="travel_descrip" cols="40" rows="20"><?=$row['description']?></textarea>
     
                                            </span>
                                           
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                      </table></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>	
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center"><span class="content">
                                <input name="submit" type="submit" id="submits" class="content" value="Update " />
                                <p align="right"><a href='view_travel_details.php?user_id=<?php echo $get_id['user_id']?>'><strong>Back To List</strong></a></p>
                                </span></td>
                            </tr>
                          </table>
                        </form></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="20">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="bottom_bg1">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<script src="ckeditor/ckeditor.js"></script>

 <script>
 CKEDITOR.replace('travel_descrip');
 </script>   

