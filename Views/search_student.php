<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {
	
	$student = new Controller();
	$student->select_Student();


	
}

?>
<?php  include("side.php");?>
<?php  include("header.php");?>
   

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >


<div class="row" style="margin:50px;">    


<h2 class="text-primary"> SEARCH  STUDENT</h2><p>  </p></div>

<div class="row">

 <div class="col-lg-4" style="margin-left:50px;">
<span class="text-danger">
 
 <?php echo $student->allfield_error; ?></span>
 
<span class=" text-success ">
<?php echo 	$student->success; ?></span>
 


<form action="<?php echo htmlspecialchars("?page=search_student");?>" method="post" role="form">

<div class="form-group">

<label for="delete"> Enter the Addmission Number of the Student to be  Search  </label>

<input type="text" name="Addmission_Number" required class="form-control">

</div>



<div class="form-group">

<button type="submit" name="Submit" class="btn-primary btn btn-group-lg "> Submit</button>

</div>



</form>


</div>



</div>


<div  class="row"> 

<div class=" col-lg-10" style="margin-left:50px;">

<?php 

if (isset ($student->Name)) { 
 echo "
<table  class="."table table-bordered table-hover" ."border="."1".">
  <tr>
    <th scope="."col".">Addnission Number</th>
    <th scope="."col".">Name</th>
    <th scope="."col".">Class</th>
    <th scope="."col".">Addmission Date</th>
    <th scope="."col".">Parent Name </th>
    <th scope="."col".">Parent Phone </th>
  </tr>
  <tr>
    <td>  $student->Addmission_Number </td>
    <td> $student->Name </td>
    <td> $student->Class </td>
    <td> $student->Addmission_Date </td>
    <td>  $student->P_Name </td>
    <td>  $student->P_phone</td>
  </tr>
</table>

<br> <a href="."?page=search_student".">
<button type="." button"." name="."Delete"." class="."btn-primary btn ".">  Close Details<i class="."fa fa-close" ."style="."font-size:36px"."></i> </button></a>

 ";

}
?>

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
