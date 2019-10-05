<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/jquery/jquery.min.js"></script>
  <style type="text/css" rel="stylesheet">
  .center {
    position: absolute;
    width: 100px;
    height: 50px;
    top: 50%;
    left: 50%;
    margin-left: -50px; /* margin is -0.5 * dimension */
    margin-top: -25px; 
}​
  </style>
  
</head>
<body>
<div class="container">
<div id="insert_suceess"></div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New</button>

  <!-- Insert -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title">Insert Record</h6>
        </div>
        <div class="modal-body">
        
         <form method="post" id="insert_record">
              
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Mobile:</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
              </div>
               <div class="form-group">
                <label for="email">Message:</label>
                <textarea  class="form-control" name="message" id="message"></textarea>
              </div>
          
              <button type="button" class="btn btn-default" onclick="insert_users()" id="insert" name="insert">Submit</button>
        </form>
         
          
        </div>
      </div>
      
    </div>
  </div>
<!-- End Insert -->


<!--Update Model-->
   <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title">Update User</h6>
        </div>
        <div class="modal-body">
        
             <form method="post" id="update_users">
             
             <div class="form-group">
  
                <input type="hidden" class="form-control" id="update_id" name="update_id">
              </div>
             
              
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="update_name" name="update_name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="update_email" name="update_email">
              </div>
              <div class="form-group">
                <label for="pwd">Mobile:</label>
                <input type="text" class="form-control" id="update_mobile" name="update_mobile">
              </div>
               <div class="form-group">
                <label for="email">Message:</label>
                <textarea  class="form-control" name="update_message" id="update_message"></textarea>
              </div>
          
              <button type="button" class="btn btn-default" onclick="update_users()">Submit</button>
        </form>
         
          
        </div>
      </div>
      
    </div>
  </div>
   <!---End Update Model-->







   <div class="row">
     <div class="col-md-10">
               <div id="user_list"></div>
     </div>
   </div>
</div>
</body>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
</html>
