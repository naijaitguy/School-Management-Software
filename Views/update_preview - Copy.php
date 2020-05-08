<?php
session_start();
if(!isset($_SESSION['addnum'])){header("location:?page=index");} else {
	
include("validate.php");
include("server.php");
 class preview {
	public  $Year;
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
	 public $reg_date;
	public $error;
    public $Addmission_Number;
	public $Addmission_Date;
	public $db;
	public $Name;
	public $success;


 public function  show(){
	 

	         $this->Name = $_SESSION['Name']  ;
	         $this->email = 	$_SESSION['Email'] ;
		     $this->phone = 	$_SESSION['Phone'] ;
			 $this->P_Name =	$_SESSION['P_Name'];
			$this->P_phone =	$_SESSION['P_Phone'] ;
			$this->address =  $_SESSION['P_Address'] ;
			$this->Class =	 $_SESSION['Class'];
			$this->birtday = $_SESSION['Birth_Day'] ;
			$this->Year  =	$_SESSION['Year'];
			$this->Addmission_Date = $_SESSION['Addmission_Date'];
			$this->gender =  $_SESSION['gender'] ;
			$this->Addmission_Number = $_SESSION['Addmission_Number'];
			$this->reg_date = date("H-I_S");
		
		
	 
         }# end funtion show 
		 
		 
		  public function Edit() {
		
		if(isset($_POST['back'])){
			
			 header("location:?page=studentupdate");
			
			// --------------do this if the make back button is set-------------- 
			
			
			} // 
			
			
		  }//---------------- end edit function -------------------
		 
		 public function Save() {
		
		if(isset($_POST['pay'])){
			// do this if the make payment button is set 
			
			
				   $query = "SELECT *  FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
				   
				   $Result = mysqli_query($this->db,$query);
				   
				   if(mysqli_num_rows($Result) > 0)
				   
				   
				    { $sql = 
	 
	 "UPDATE student 
set Name = '$this->Name',Email = '$this->email',Gender = '$this->gender',Birthday = '$this->birtday',Phone_No = '$this->phone',P_Name = '$this->P_Name',P_Phone = '$this->P_phone',Class = '$this->Class',Year = '$this->Year',Address = '$this->Addmission_Date',Addmission_Date = '$this->Addmission_Date',Reg_Date = '$this->reg_date' WHERE Addmission_Number = '$this->Addmission_Number'";
	 
	
				      
				 if( mysqli_query($this->db,$sql)) 
				 
				     {
					 
					 $this->success  = " Student with Addmission Number - $this->Addmission_Number -  was succesfully Updated";
					 session_destroy();
					 
					 } else { $this->allfield_error  = " Could Not Saved";}
					 
					 
				   }
				   
				   else 
				   
				   {  $this->allfield_error =  " *  ADDMISSION NUMBER  - " . $this->Addmission_Number ." -  NOT FOUND .";
				   
				   } 
				   
				   
	
			
			
			
			} // if is set 
		
		}	// End save function --------------
		
		 
     }#-------end class preview---------
 
 
 $preview = new preview();
 $preview->db = $conn;
 $preview->show();
 $preview->Edit();
 $preview->Save();
	
}?>
<?php  include("include/side.php");?>
<?php  include("include/header.php");?>
   

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >


<div class="row">    


<div class="col-md-5" style="margin:70px;"> 

<span class="text-danger">
<?php echo 	$preview->allfield_error; ?></span>
<span class=" text-success ">
<?php echo 	$preview->success; ?></span

><table  class="table table-responsive table-condensed  table-bordered" >



   <h2 class="text-center text-info caption">  Preview Student Detail</h2><p>

  
  <tr>
    <th scope="row">FULL NAME:</th>
   <td><?php echo 	$preview->Name; ?></td>
  </tr>
  
  <tr>
    <th scope="row">E-MAIL</th>
     <td><?php echo $preview->email; ?></td>
  </tr>
   <tr>
    <th scope="row">GENDER</th>
     <td><?php echo 	  $_SESSION['gender']; ?></td>
  </tr>
  <tr>
    <th scope="row">PHONE NO</th>
  <td><?php echo $preview->phone; ?></td>
  </tr>
  
    <tr>
    <th scope="row">BIRTH DAY </th>
  <td><?php echo $preview->birtday; ?></td>
  </tr>
  
  <tr>
    <th scope="row">CLASS </th>
   <td><?php echo 	$preview->Class; ?></td>
  </tr>
  <tr>
    <th scope="row">YEAR</th>
     <td><?php echo $preview->Year; ?></td>
  </tr>
  
    <tr>
    <th scope="row"> ADMISSION DATE </th>
   <td><?php echo $preview->Addmission_Date; ?></td>
  </tr>
  
    <tr>
    <th scope="row"> ADMISSION NUMBER </th>
   <td><?php echo $preview->Addmission_Number; ?></td>
  </tr>
  
  
  
   <tr>
    <th scope="row">ADDRESS </th>
     <td><?php echo $preview->address; ?></td>
  </tr>


  
   <tr>
    <th scope="row">NEXT OF  KIN NAME </th>
     <td><?php echo $preview->P_Name; ?></td>
  </tr>
  
   <tr>
    <th scope="row">NEXT OF KIN PHONE</th>
     <td><?php echo $preview->P_phone; ?></td>
  </tr>
  
 
  <tr> 
 
<td>

<form  class=""action="<?php echo htmlspecialchars("?page=update_preview");?>" method="post" role="form" >
 
 <button class="btn btn-primary "  name="back" type="submit" > GO BACK  </button>
 </td>


<td>   

 <button class="btn btn-success "  name="pay" type="submit" >UPDATE STUDENT </button>
 
</form>

</td>

 </tr>
 
</table></div>





</div>





</div><!-----end containner--------------------->



<?php include("include/script.php"); ?>    <!-- Right Panel -->
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
