<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {
}?> 
 
<?php
include("validate.php");
class booking_details{	

	public  $Year;
	public $name;
	public $total;
	public $email;
	public $P_Name;
	public $gender;
	public $amount;
	public $phone;
	public $P_phone;
	public $address;
	public $birtday;
	public $Class;
	public $allfield_error;
	public $return_message;
	public $error;
	public $Addmission_Number;
	
	public $Error_Phone;
	public $Error_Email;
	public $Error_allfields;
	public $Name_error;
	public $db;
		   
   public function book(){

			   		
		if(isset( $_POST['save']))
		
	      {
			

	//-------- collect User input------//
			
   	 $Name =  ($_POST['FirstName']);
	 $email  = $_POST['Email'];
	 $Phone = $_POST['Phone'];
	 $Birth_Day =  $_POST['Birth'];
	  $Class =  $_POST['Class'];
	   $Year =  $_POST['Year'];
	 $Admission_number = $_POST['Addmission_Number'];  
	 $Gender =  $_POST['Gender'];
	 $P_Name = $_POST['P_Name'];
	 $P_Phone = $_POST['P_Phone'];
	 $P_Address = $_POST['P_Address'];
	 $addmission_Date = $_POST['Addmission_Date'];
	 
	 
if(empty($Name)||empty($email)||empty($Phone)||empty($Birth_Day) ||empty($P_Address)||empty($Gender)||empty($P_Name) ||empty ($P_Phone)||empty($Class) ||empty($Year) ||empty($addmission_Date) ||empty($Admission_number))
			
			{
				
			$this->Error_allfields = "* All Fields are Required ";
			
			}// End of if Empty
				else{
					
					if (!preg_match("/^[a-zA-Z ]*$/",$Name)||!preg_match("/^[a-zA-Z ]*$/",$P_Name) ) {
             $this->Name_error = " * Name Must Contain letter Only"; 
	 
           } else {  if(!preg_match('/^[0-9]*$/', $Phone)||!preg_match('/^[0-9]*$/', $P_Phone) ||!preg_match('/^[0-9]*$/', $Admission_number)){ $this->Error_Phone = " * Phone Number , Addmission Number Must Contain Numbers Only ";} else{
			   
			    if(filter_var($email,FILTER_SANITIZE_EMAIL)){
			
			if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){	$this->Error_Email = " * Email address not valid";	} 
			
			
			else { 
			
			
if($Name == $P_Name || $P_Phone == $Phone ){ $this->Name_error = " * Your Name  Can Not Be The Same As Your Next Of Kin"; $this->Error_Phone = " * Your Phone Number Can Not Be The Same As Your Next Of Kin ";} else {
				
		$check = new validate();
		
		$_SESSION['Name']  = $check->test_input($Name);
		$_SESSION['Email'] = $check->test_input($email);
			$_SESSION['Phone'] = $check->test_input($Phone);
				$_SESSION['P_Name'] = $check->test_input($P_Name);
					$_SESSION['P_Phone'] = $check->test_input($P_Phone);
					    $_SESSION['P_Address'] = $check->test_input($P_Address);
						 	 $_SESSION['Class']= $check->test_input($Class);
							$_SESSION['Birth_Day'] = $check->test_input($Birth_Day);
							$_SESSION['Year']= $check->test_input($Year);
							$_SESSION['Addmission_Date']= $check->test_input($addmission_Date);
								  $_SESSION['gender'] = $check->test_input($Gender);
								 $_SESSION['Addmission_Number'] = $check->test_input($Admission_number);
							            	header("location:?page=student_preview");
				
			
				
				}#END of if the same details 
			  
				
			     }#End of sanitizing Email
				
				
				}#End of Email validation
			   
			   
			   
			   
			   }#End of Number format
	 
	 
	 
	 
	          }#End of name format 
					
					
					
					
					}#End of if not empty
	 
	
	 
	 
	 
		  }#End of if set
			   
			   
			   }#End of book function 
		   
		   
	

}////end class 
	

	
$data = new booking_details();
$data->book();

?>
<?php  include("side.php");?>
<?php  include("header.php");?> 
<link rel="stylesheet" type="text/css" href="..Content/css/bootstrap.css">

<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >


<div class="row">    

<h3 class="text-center text-primary" style="margin-left:50px;"  > ADD NEW STUDENT </h3>


</div>

<div class="row" style="padding:10px;">


<div class=" col-md-4 col-xs-offset-1  " style="margin-left:70px;" >
 <span  class=" error">  <?php echo  $data->Error_allfields;  ?></span>

 <form action="<?php echo htmlspecialchars("?page=add_student");?>" method="post"  role="form">
   
  <div class=" form-group-sm  ">
    
 <label for="FirstName"> Full Name:</label>
  <input type="text" class="form-control" required name="FirstName" placeholder="Your Full Name Here"/>
    
    
  </div>
  
  <span  class=" error">  <?php echo $data->Name_error; ?></span>
   
     
   
   
  <div class=" form-group-sm  ">
    
  <label for="phone"> Phone Number</label>
    
  <input  class="form-control" required  type="tel" name="Phone"  placeholder="Your Phone Number Here">
    
    
  </div>
  

    
   <div class=" form-group-sm ">
    
  <label for="Gender"> Gender</label>
     
  <select  class="form-control" name="Gender" >
    
  <option  value="Male"> Male</option>
  <option  value="Female"> Female</option>
    
  </select>
    
    
  </div>
  

  
  
  <span class=" error"> <?php echo $data->Name_error; ?>  </span> 
   
   
   
 <div class=" form-group-sm  ">
    
 <label for="class"> Current Class </label><br>
    
  <select  name="Class" required class=" form-control" >
    
  <option  value=""> Select  Class</option>
  <option  value="jss1"> J S S 1</option>
  <option  value="jss2"> J S S 2</option>
 <option  value="jss3"> J S S 3 </option>
  <option  value="sss1"> S S S 1</option>
   <option  value="sss2"> S S S 2</option>
    <option  value="sss3"> S S S 3</option>  
  </select>
  </div>
  
  <span class=" error"> <?php echo $data->Error_Phone;  ?></span>
  
  
  
     
 <div class=" form-group-sm  ">
    
 <label for="class"> Academic year  </label><br>
    
  <select  name="Year" required class=" form-control" >
    
  <option  value=""> Select  Year </option>
  <option  value="2018"> 2018</option>
  <option  value="2019"> 2019</option>
 <option  value="2020"> 2020 </option>
  <option  value="2021"> 2021 </option>
   <option  value="2022"> 2022 </option>
     
  </select>
  </div>
  
  <span class=" error"> <?php echo $data->Error_Phone;  ?></span>


    
      <span class=" error"> <?php echo $data->Error_Phone; ?></span>
    
<div class=" form-group-sm  ">
    
  <label for="Addmission_Number"> ADDMISSION NUMBER </label><br>
    
  <input class="form-control"  type="text" name="Addmission_Number">
   </div>
  
    
    
    </div>  <!-------end  div --------------------->
    
    
    <div class=" col-md-4 col-xs-offset-1  " >
    
    
    
    
    
   
  <div class=" form-group-sm  ">
    
  <label for="Email"> Email</label>
    
  <input  class="form-control"   type="email" required name="Email"  placeholder="Your Email Here">
    
</div>
  
<span class=" error"> <?php  echo  $data->Error_Email; ?></span>
       

    
<div class=" form-group-sm  ">
    
  <label for="Birth"> Date Of Birth </label><br>
    
  <input class="form-control" type="date" name="Birth">
   </div>
  
    
    <div class=" form-group-sm  ">
    
  <label for="Addmission_Date"> Addmission Date  </label><br>
    
  <input class="form-control " type="date" name="Addmission_Date">
   </div>
      
   <div class=" form-group-sm ">
    
  <label for="P_Name"> Parent  Names</label>
    
  <input  class="form-control" type="text" name="P_Name"  placeholder="Next of Kin Names Here">
    
    
  </div>
  
  <span class=" error"> <?php echo $data->Name_error; ?>  </span> 
   
   
   
 <div class=" form-group-sm  ">
    
  <label for="P_Phone"> Parent Phone Number</label>
    
  <input  class="form-control"  type="tel" name="P_Phone"   required placeholder="Your Next of kin Phone No Here">
    
    
  </div>
  
  
  
  <div class=" form-group-sm ">
    
  <label for="P_Address"> Parent Address </label>
    
  <input  class="form-control" type="text" name="P_Address" required  placeholder="Next of Kin Names Here">
    
    
  </div><p>
  
  
    <div  class="btn-group-lg" style="margin-top:50px;">
  
 <button  class="btn form-control  btn-primary"  name="save" type="submit"  style="margin:10px; padding:5px;" > PREVIEW ENTRIES   </button></div>
    
  
    
    </div>
    
</form>




</div> <!-------end  row  --------------------->

</div><!-------en



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
