<?php

$staff  = new Controller();

$staff->GetRecord();


?>

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

    <title>STUDENT MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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


    <div class="container">
    
    <div class="row">

  
      <?php
		  
		  if(isset($staff->empty_erro)){
		  
 echo "<div class=\"alert-danger\" style=\"padding: 20px;\">".$staff->empty_erro." </div>";
		  
		  }
		  
		  ?> 
        <form action="<?php echo htmlspecialchars("index.php");?>" method="post" role="form" class=" col-md-4"> 
      
       
      <h2 class="form-signin-heading text-primary" >Admin Please sign in to Acount </h2>
      
      <div class="form-group">
        
        
        <label for="inputEmail" class="">Email address</label>
        <input type="text" id="inputEmail" class="form-control" name="User" placeholder="Email Or USerName " required autofocus>
        </div>
        
        
        <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password" required></div>
        
        
        <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="Submit">Sign in</button>
      </form>
      
    

</div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
