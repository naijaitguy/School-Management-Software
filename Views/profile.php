<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {

class profile {

	public $db;
	public $old_password;
	public $new_password;
	public $new_confirm_password;
	public $error;
	public $userName;
	public $success;
	
	
	public function retrive (){
		
		if(isset($_POST['change']))
		{
			
			$password_old = $_POST['password_old'];
			
			$password_new = $_POST['password_new'];
			
			$password_confirm = $_POST['password_confirm'];
			
			$username = $_SESSION['UserName'];
				
			if (empty($password_confirm) || empty($password_new) || empty($password_old) ){
				
				$this->error = "  * All Fields are mandatory ";
				
			}// end if empty 
			
			else {
				
				if ($password_new != $password_confirm) { $this->error = " * Password do not Match try again";} else{
				
				$validate = new validate();
				
				$this->old_password = $password_old;
				$this->new_password = $password_new;
				$this->new_confirm_password = $password_new;
				$this->userName = $validate->test_input($username);
				
			$sql = " SELECT * FROM users WHERE  Password =  '$this->old_password'";
	
	         $result = mysqli_query($this->db,$sql);
			 
			 if(mysqli_num_rows($result) > 0)
			 
	               {
					   
		$sql = " SELECT * FROM Users WHERE  Password =  '$this->new_confirm_password'";
	
	         $result = mysqli_query($this->db,$sql);
			 
			 if(mysqli_num_rows($result) > 0){ $this->error = " Password Already exist try Another "; } else 
					   
					   
					   {
		  $this->success = " password found ";
			$sql = "   UPDATE users SET Password = '$this->new_confirm_password' WHERE UserName = '$this->userName' ";
					
					if(mysqli_query($this->db, $sql) > 0)
					
					
					{  $this->success = " Password Successfully chaned";
					session_destroy();
					
					 }
						
		
					   }
					   
					   
					   
					   }  else {$this->error = "  Password not found ";}
				
				
				
				}
				} // if not empty 
			
			
			
			}//if set
		

		}//function

	
	}//end class

$profile = new profile();

$profile->retrive();

}


include("side.php");
include("header.php");  


?>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<div class=" container-fluid" >

<div class="row"s style="padding:100px;">    


<div class="col-lg-12">
     
     
     <div class="col-lg-4">
     
     
      <h4 style="color:red;">
     <?php   
	
 echo $profile->error;
	 
	 

	 
	 ?>
     </h4>
     
        <h4 style="color:#090;">
     <?php   
	

	 
	 echo $profile->success;

	 
	 ?>
     </h4>
     <form action=" " method="post" role="form">
     
     
     
     
     

       
    <div class=" form-group ">
    
 <label for="Name"> Old Password  :</label>
  <input  type="password" class="form-control" required name="password_old" placeholder="old password"/>
    
    
  </div>
  
  
  <div class=" form-group ">
    
 <label for="Name"> New Password   :</label>
  <input  type="password" class="form-control" required name="password_new" placeholder="New  password"/>
    
    
  </div>
  
  
  
  <div class=" form-group ">
    
 <label for="Name"> Confirm New Password  :</label>
  <input  type="password" class="form-control" required name="password_confirm" placeholder="Confirm New password"/>
    
    
  </div>
       
       
       <div class=" form-group ">
    
 <button type="submit"`  class="btn  btn-primary btn-lg" name="change" >  Changes Password </button>
    
    
  </div>
       
       
       
     
         </form>
     </div>
     
     
     </div>
     
 
     
     
     
   


</div>


</div><!-----end containner--------------------->



<?php include("script.php"); ?>    <!-- Right Panel -->
</body>


  
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
