<?php
class pages{

public $page;


public function GetPage(){

$this->page = empty($_GET['page']) ? "index" : $_GET['page'];
 include("Controller/Controller.php");
	  switch ($this->page)
	  {
		  case "index":
	
		
		  break;
		  
		   case "about":
		 
		  break;
		  
		   
		   case "homepage":
		
		  break;
		  
		    
		   case "student":
		 
		  break;
		  
		    
		   case "grade":
		
		  break;
		  
		    
		   case "courses":
		
		  break;
		  
		    
		   case "teacher":
		 
		  break;
		  
		    
		   case "profile":
		 
		  break;
		  
		    
		   case "logout":
		
		  break;
		  
		    
		   case "add_student":
		  
		  break;
		  
		    
		   case "delete_student":
		 
		  break;
		  
		    
		   case "update_student":
		  
		  break;
		  
		    
		   case "search_student":
		
		  break;
		  
		    
		   case "student_preview":
		  
		  break;
		  
		    
		   case "studentupdate":
		  
		  break;
		  
		    
		   case "update_preview":
		
		  break;
	
		  default: 
		  
		  $this->page = "index";
		 
		  
		  }

}


}

$pages = new pages();
$pages->GetPage();
include("Views/$pages->page.php");

?>
