<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {

	
	$student = new Controller();
	
	$student->update_Student();
	
	
}?>
<?php  include("side.php");?>
<?php  include("header.php");?>
   

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >

<div class="row"> 
<div class="col-lg-8" style=" margin:50px;">
 <h3 class="text-center text-primary"> UPDATE STUDENT</h3>

</div>
 </div>
<div class="row">    




 <div class="col-lg-4" style="margin-left:50px;">
<span class="text-danger">
 
 <?php echo $student->error; ?></span>
 
<span class=" text-success ">
<?php echo 	$student->success; ?></span>
 


<form action="<?php echo htmlspecialchars("?page=update_student");?>" method="post" role="form">

<div class="form-group">

<label for="delete"> Enter the Addmission Number of the Student to be  Updated  </label>

<input type="text" name="Addmission_Number" required class="form-control">

</div>



<div class="form-group">

<button type="submit" name="Submit" class="btn-primary btn btn-group-lg "> Submit</button>

</div>



</form>


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
