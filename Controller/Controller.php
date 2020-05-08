<?php
//include("../Model/model.php");
include("Model/model.php");

class Controller extends My_Db_Connection {

	
	
				   
	public $Error_Phone;
	public $Error_Email;
	public $Error_allfields;
	public $Name_error;
public $empty_erro;
public $UserName ;
private $Passwod ;
public $Date;

public $lastseen;
public $user;
	////////////////////////
	
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
	
	public $Name;
	public $success;

	
	/////////////update///////////
	
	


public function GetRecord(){	
if(isset($_POST['Submit']))			
			{			
$UserName = $_POST['User'];
$Password = $_POST['Password'];

if( empty($UserName)|| empty($Password))

{ $this->empty_erro = " *All Fields Are Required  ";}else{

$this->UserName = $this->test_input($UserName);
 $Passwod = $this->test_input($Password);
 $this->Passwod = $this->hashpassword($Passwod,$UserName);
	
$this->Date =  date("d- M- Y") ."  Time ".date("g:i:s");

$sql = " SELECT * FROM users WHERE UserName = '$UserName'  AND Password = '$this->Passwod'";	
$result = $this->Count_Num_rows($sql);
	
	
 if($result == false ) {  $this->empty_erro = "  * UserName and Password Combination is Invalid";}else{
					
$sql = " SELECT * FROM users WHERE UserName = '$this->UserName'";
	 
$result = $this->Select($sql);
	 
 if(($result) != false){ 	 

foreach( $result as $key=>$value)
	 
$this->lastseen = $result[$key]["LastLogin"];
	 session_start();
$_SESSION['last'] = $this->lastseen;
$_SESSION['UserName'] = $this->UserName;
$_SESSION['Password'] = $this->Passwod;
					   
$this->user = $_SESSION['UserName'];	
$sql = "UPDATE users SET LastLogin= '$this->Date' WHERE UserName = '$this->UserName' ";	
				
if($this->Update($sql) != false)

{header("location:?page=homepage");}
			 
			
					}
	 }
	
				
				 }//#End of if empty -----------------------

			
			}//#End of if is set



}/// #end of Get Record function


public function GetAllStudent(){
	
	$query = " SELECT * FROM student ";
	
	$Result = $this->Select($query);
	
	return($Result);
	
}
	
	
	
	
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
			
			 header("location:?page=add_student");
			
			// --------------do this if the make back button is set-------------- 
			
			
			} // 
			
			
		  }//---------------- end edit function -------------------
		 
public function Save() {
		
 if(isset($_POST['pay'])){
			// do this if the make payment button is set 
			
			
		 $query = "SELECT *  FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
				   
		 $Result = $this->Select($query);
				   
		 if($Result != false )
	 {  
$this->allfield_error =  " *  ADDMISSION NUMBER  - " . $this->Addmission_Number ." -  ALREDY EXIST .";}
	 
	 
 else { $sql =  "INSERT INTO student(Addmission_Number,Name,Email,Gender,Birthday,Phone_No,P_Name,P_Phone,Class,Year,Address,Addmission_Date,Reg_Date)
	 VALUES('$this->Addmission_Number','$this->Name','$this->email','$this->gender','$this->birtday','$this->phone','$this->P_Name','$this->P_phone','$this->Class','$this->Year','$this->address','$this->Addmission_Date','$this->reg_date')";
	   
	   $Result_Of_Inseted_Sql = $this->Insert_Data($sql);
				      
	 if( $Result_Of_Inseted_Sql > 0 ) 
				 
	    {
					 
$this->success  = " Student with Addmission Number - $this->Addmission_Number -  was succesfully added";}
	   
	else  { $this->allfield_error  = " Could Not Saved";}
					 
					 
				   }
			
			
			
			} // if is set 
		
		}	// End save function --------------
		
	
	
public function update_Student(){
		
		if(isset($_POST['Submit'])){
			
			$addmission_number = $_POST['Addmission_Number'];
	if (empty($addmission_number)){$this->error= " Pls Enter Addmission Number";}//end if empty
			
			else{ 
				
				
		 $this->Addmission_Number  =	 $this->test_input($addmission_number);
		 
		 $sql = " SELECT * FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
					
					$result = $this->Select($sql);
					
					if ($result != false) {
						
						
						foreach($result as $key=>$Value){
							
							
							session_start();
		
		$_SESSION['Name']  = $result[$key]["Name"];
		$_SESSION['Email'] = $result [$key]["Email"];
			$_SESSION['Phone'] = $result [$key]["Phone_No"];
				$_SESSION['P_Name'] = $result [$key]["P_Name"];
					$_SESSION['P_Phone'] = $result [$key]["P_Phone"];
					    $_SESSION['P_Address'] = $result [$key]["Address"];
						 	 $_SESSION['Class']= $result [$key]["Class"];
							$_SESSION['Birth_Day'] = $result [$key]["Birth_Day"];
							$_SESSION['Year']= $result[$key]["Year"];
							$_SESSION['Addmission_Date']= $result [$key]["Addmission_Date"];
								 $_SESSION['gender'] = $result[$key]["gender"];
						
							
							
						
						
						$_SESSION['addnum'] = $this->Addmission_Number;
						header("location:?page=studentupdate");
						
					}//end if addmission number is found 
					}	else {  $this->error = " student with  Addmission Number  $this->Addmission_Number  is not found ";}
				
				}//end not empty
			
			
			}//end if set 
		
		
		
		
		
		
		}//end function 
		
	
public function Add_Update(){

			   		
		if(isset( $_POST['save']))
		
	      {

	//-------- collect User input------//
			
   	 $Name =  ($_POST['FirstName']);
	 $email  = $_POST['Email'];
	 $Phone = $_POST['Phone'];
	 $Birth_Day =  $_POST['Birth'];
	 $Class =  $_POST['Class'];
	  $Year =  $_POST['Year'];
	 $Admission_number = $_SESSION['addnum']; 
	 $Gender =  $_POST['Gender'];
	 $P_Name = $_POST['P_Name'];
	 $P_Phone = $_POST['P_Phone'];
	 $P_Address = $_POST['P_Address'];
	 $addmission_Date = $_POST['Addmission_Date'];
	 
	 
if(empty($Name)||empty($email)||empty($Phone)||empty($Birth_Day) ||empty($P_Address)||empty($Gender)||empty($P_Name) ||empty ($P_Phone)||empty($Class) ||empty($Year) ||empty($addmission_Date))
			
			{
				
			$this->Error_allfields = "* All Fields are Required ";
			
			}// End of if Empty
			  
		else{
					
		if ($this->Validate_Letter($Name) == false ||$this->Validate_Letter($P_Name) == false) {
			
			
             $this->Name_error = " * Name Must Contain letter Only"; 
	 
          } else{
			
	if($this->Validate_Number( $Phone) == false || $this->Validate_Number($P_Phone)== false ||$this->Validate_Number($Admission_number == false))
		
	{ $this->Error_Phone = " * Phone Number , Addmission Number Must Contain Numbers Only ";} 
			
	else{
		
	if($this->Validate_Email($email) == false ){
			
		
		$this->empty_erro = " Pls Enter a VAlid Email";
	}
			
			
	else { 
			
			
if($Name == $P_Name || $P_Phone == $Phone ){ $this->Name_error = " * Your Name  Can Not Be The Same As Your Next Of Kin"; $this->Error_Phone = " * Your Phone Number Can Not Be The Same As Your Next Of Kin ";} else {
				
		session_start();
		
		$_SESSION['Name']  = $this->test_input($Name);
		$_SESSION['Email'] = $this->test_input($email);
			$_SESSION['Phone'] = $this->test_input($Phone);
				$_SESSION['P_Name'] = $this->test_input($P_Name);
					$_SESSION['P_Phone'] = $this->test_input($P_Phone);
					    $_SESSION['P_Address'] = $this->test_input($P_Address);
						 	 $_SESSION['Class']= $this->test_input($Class);
							$_SESSION['Birth_Day'] = $this->test_input($Birth_Day);
							$_SESSION['Year']= $this->test_input($Year);
							$_SESSION['Addmission_Date']= $this->test_input($addmission_Date);
								 $_SESSION['gender'] = $this->test_input($Gender);
						$_SESSION['Addmission_Number'] = $this->test_input($Admission_number);
							            	header("location:?page=update_preview");
				
			
				
				}#END of if the same details 
			  
				
			     }#End of sanitizing Email
				
				
				}#End of Email validation
			   
			   
			   
			   
			   }#End of Number format
	 
	 
	 
	 
	          }#End of name format 
					
					
					
					
					}#End of if not empty
	 
	
	 
	 
	 
		  }#End of if set
	
	
	
public function Save_Update() {
		
if(isset($_POST['pay'])){
			// do this if the make payment button is set 
			
			
	   $query = "SELECT *  FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
				   
	   $Result = $this->Select($query);
				   
	   if($Result != false)
				   	   
{ $sql =  "UPDATE student set Name = '$this->Name',Email = '$this->email',Gender = '$this->gender',Birthday = '$this->birtday',Phone_No = '$this->phone',P_Name = '$this->P_Name',P_Phone = '$this->P_phone',Class = '$this->Class',Year = '$this->Year',Address = '$this->Addmission_Date',Addmission_Date = '$this->Addmission_Date',Reg_Date = '$this->reg_date' WHERE Addmission_Number = '$this->Addmission_Number'";
	 
	
				      
if( $this->Update($sql) > 0) 
				 
 {
					 
 $this->success  = " Student with Addmission Number - $this->Addmission_Number -  was succesfully Updated";
 
					 
} else { $this->allfield_error  = " Could Not Saved";}
					 
					 
				   }
				   
				   else 
				   
 {  $this->allfield_error =  " *  ADDMISSION NUMBER  - " . $this->Addmission_Number ." -  NOT FOUND ."; } 
				   
				   
	
			
			
			
			} // if is set 
		
		}	// End save function --------------
			
	
	
public function Find_Student(){ 
	if(isset($_POST['Submit'])){
				
	$addmission_number = $_POST['Addmission_Number'];
				
			
	if(empty($addmission_number)){ $this->allfield_error = " Pls Enter Addmission Number ";} else {
					
					
			
				
		$this->Addmission_Number  = $this->test_input($addmission_number);
		$_SESSION['Addmission_Number']=  $this->Addmission_Number;
					
					$sql = " SELECT * FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
					
					$result = $this->Select($sql);
					
					if ($result != false) {
						
						
						foreach ( $result as $output=>$value){
							
						$this->Name =  $result [$output]['Name'];
						$this->Class =  $result [$output]['Class'];
						$this->Addmission_Date =  $result [$output]['Addmission_Date'];
						$this->P_Name =  $result [$output]['P_Name'];
						$this->P_phone =  $result [$output]['P_Phone'];

							
							} // end while row 
						
						
						} else { $this->allfield_error = " Addmission Number -   $this->Addmission_Number -  not Found";}
					
					
				
				}// end if not empty
				
				}// end if is set
							  }//end function 
			
public function Delete_Student() { 
			
			if(isset($_POST['Delete'])) {
				
				$this->Addmission_Number = 	$_SESSION['Addmission_Number'];
					
					$sql = " DELETE  FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
			 
					
					if ($this->Delete($sql) > 0 ) {
						
						
						$this->success = " deleted";
						
						
						
				}
				
			}
			
			}
		
			   
public function select_Student() { if(isset($_POST['Submit'])) {
				
				$addmission_number = $_POST['Addmission_Number'];
				
			
				if(empty($addmission_number)){ $this->allfield_error = " Pls Enter Addmission Number ";} else {
					
				
				
				$this->Addmission_Number  = $this->test_input($addmission_number);
					$_SESSION['Addmission_Number']=  $this->Addmission_Number;
					
					$sql = " SELECT * FROM student WHERE Addmission_Number = '$this->Addmission_Number'";
					
					$result = $this->Select($sql);
					
					if ($result != false) {
						
						
						foreach($result as $output=>$Value){
							
						$this->Name =  $result [$output] ['Name'];
						$this->Class = $result [$output]['Class'];
						$this->Addmission_Date = $result [$output]['Addmission_Date'];
						$this->P_Name = $result [$output]['P_Name'];
						$this->P_phone = $result [$output]['P_Phone'];

							
							} // end while row 
						
						
						} else { $this->allfield_error = " Addmission Number -   $this->Addmission_Number -  not Found";}
					
					
				
				}// end if not empty
				
				}// end if is set 
			
			    }//end function 
					   
	
	
			   }#End of book function 
		   
	
	



?>