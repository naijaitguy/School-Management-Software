<?php 

class My_Db_Connection{
	
	private $Host = "localhost";
    private $Db_Name = "myschool";
	private $Db_User_Name = "root";
	private $Db_Password = "" ;
	private $Db_Connection;	
	
	/*private $Host = "naijaitguys.com.ng";
    private $Db_Name = "naijaitg_naijaitguys";
	private $Db_User_Name = "naijaitg";
	private $Db_Password = "5(l!A5Dq7MHdj8" ;
	private $Db_Connection;*/
	
	
	function __construct() {
		
	$this->Db_Connection = $this->Connect();
		
	
		}
	
	private function Connect(){
		
	$Connection = mysqli_connect($this->Host, $this->Db_User_Name, $this->Db_Password,$this->Db_Name);
		
	return($Connection);
		
		
		
	}
	

    protected function Escape_sql_injection($value){
		
		$Clean_value = mysqli_real_escape_string($this->Db_Connection,$value);
		
		return($Clean_value);
		
		
	}
	
	
	protected	function hashpassword($password,$username){

	$hash = md5($username);

	$salt = md5($password);

	$papper = 'uuhuy@#hb$%$%ovcv75ty84g4irrbgvffe';

	$Secure_password = hash('sha256',$hash.$salt.$papper);

	return  $Secure_password;

}
	
	/*VALIDATE USERS INPUT STRING VALUE*/

    protected function test_input($data) {

	
  $Trim_data = trim($data);

  $Strip_data = stripslashes($Trim_data);
  $Clean_data = htmlspecialchars($Strip_data);		

  

  return $Clean_data;

}
	
	
	protected function Validate_Email($Email){
		
		$Sanitize_email = filter_var($Email,FILTER_SANITIZE_EMAIL);
		
		if(filter_var($Sanitize_email,FILTER_VALIDATE_EMAIL)){
			
		return($Sanitize_email);
			
		} else{ return(false);}

		
	}
	
	
	protected function Validate_Letter($latter){
		
	if(preg_match( "/^[a-zA-Z ]*$/",$latter)){
		
		return($latter);
		
	}	else{  return(false) ;  }
		
		
	}
	
	
	protected function Validate_Number($Number){
		
    if( preg_match("/^[0-9]+$/",$Number)) {
	 
		 return($Number);
	 
     }
		
		else{ return(false);}

	}
	
	
	protected function Select($sql){
	
		
	$result = mysqli_query($this->Db_Connection,$sql);
	$rows_count = mysqli_num_rows($result);	
	if($rows_count > 0){
			
	while($rows = mysqli_fetch_assoc($result)){ $Array_row[] = $rows; }
			
			return($Array_row);
	} else 
	{ return false ;}
		
		
		
	}
	
		
	protected function Count_Num_rows($query){
		
	$result = mysqli_query($this->Db_Connection,$query);
	
	$row_Count = mysqli_num_rows($result);
		
	if($row_Count > 0 ){ return($row_Count); }
		
		else{  return false;}
	
	
		
		
		
	}
	
	
	protected function Update($query){
	
	
		
	$result = mysqli_query($this->Db_Connection,$query);
	
	$row_Count = mysqli_affected_rows($this->Db_Connection);
	
	return($row_Count);
		
		
	}
	
	
	protected function Delete($query){
	
		
	$result = mysqli_query($this->Db_Connection,$query);
	
	$row_Count = mysqli_affected_rows($this->Db_Connection);
	
	return($row_Count);
		
		
		
	}
	
	
	protected function Insert_Data($query){
		
		    $result = mysqli_query($this->Db_Connection,$query);
	     	$row_count = mysqli_affected_rows($this->Db_Connection);
			if ($row_count > 0 ){  return $row_count;}
		
		    else{ return mysqli_error($this->Db_Connection) ;}

	}
	
	
	
	protected function Get_Last_Inserted_Id($query){
		  
		    $result = mysqli_query($this->Db_Connection,$query);
	     	$row_count = mysqli_affected_rows($this->Db_Connection);
			if ($row_count > 0 ){
				
				$inserted_ID = mysqli_insert_id($this->Db_Connection);
				
				return $inserted_ID;}
		
		       else{ return false;}
		
		
		
	}
	
	
   }
?>