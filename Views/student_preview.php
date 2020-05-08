<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {

 $preview = new Controller();
 
 $preview->show();
 $preview->Edit();
 $preview->Save();
	
}

?>
<?php  include("side.php");?>
<?php  include("header.php");?>
   

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

<form  class=""action="<?php echo htmlspecialchars("?page=student_preview");?>" method="post" role="form" >
 
 <button class="btn btn-primary "  name="back" type="submit" > GO BACK  </button>
 </td>


<td>   

 <button class="btn btn-success "  name="pay" type="submit" > ADD STUDENT </button>
 
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
