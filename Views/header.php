<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>NAIJA IT GUYS STUDENT MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Bootstrap core CSS -->
    <link href="Content/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Content/css/mystyle.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>    	 background-color:rgba(0,0,0,0.9);</style>
  </head>



<div class=" container-fluid" >
<div class="row"  style="background-color:#333;">
<div class="col-lg-12"> 


  <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-5">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                   
                     <h4 class="text-primary"> NAIJA IT GUYS STUDENT MANAGEMENT SYSTEM  </h4>  

                    </div>
               


          <div class="col-sm-7">
                    <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
                        <div class="text-success" style="padding-top:10px;">
						<i class="fa fa-user-circle" style="font-size:20px"></i>
						
						
		<?php 
							
							if(isset($_SESSION['UserName'])){
							echo  "Welcome back ".  ($_SESSION['UserName']).","." ". "You Last Login On ". $_SESSION['last']; 
							
							}
							?>
                             </div>
                             
                        </a> 

                   <div class="user-menu dropdown-menu">
                       <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                     <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                        
                    </div>

             </div> 
             
             </div>     
        </header><!-- /header -->


 </div>

</div>
</div>              
        
                
 