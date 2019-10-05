<?php  include("connection.php");?>


 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Message</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	   $sql="select * from mytable ORDER BY id DESC";
	   $select=$con->query($sql);
	   while($rows=$select->fetch_array())
	   {
		  // print_r($rows); die;
	?>
    
      <tr>
        <td><?php echo $rows['name'] ?></td>
        <td><?php echo $rows['email'] ?></td>
        <td><?php echo $rows['mobile'] ?></td>
        <td><?php echo $rows['message'] ?></td>
        <td>
		  <button type="button" onclick="GetUserDetails('<?=$rows['id']?>')" class="btn btn-warning">Update</button>
		</td>
        <td>
		 <button type="button"  onclick="DeleteUser('<?=$rows['id']?>')" class="btn btn-danger">Delete</button>
		</td>
        
      </tr>
      <?php
	  
	   }
	   ?>
      
    </tbody>
  </table>



