<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {
}?>
<?php  include("side.php");?>
<?php  include("header.php");

?>


<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >

	<div style="height: 20px;"></div>
	<div class="row">

	<div class="  col-md-4 col-lg-12 ">

    <table  class="table table-responsive  table-condensed table-bordered table-hover">
		<thead  style="background-color:#090; color:#FFF; ">
			<th>Addmission Number</th>
			<th>Student Name</th>
			<th>Class</th>
			<th>Addmission Date</th>
            <th>Email </th>
            <th>Gender</th>
            <th> Date_of Birth</th>
            <th>Parent Name</th>
            <th>Parent Phones </th>
            <th>Parent Address</th>
		</thead>
		<tbody>
		<?php
			
			$Student = new Controller();
			
		$StudentRecord =	$Student->GetAllStudent();
		
		if($StudentRecord == false){  echo " <h2 class =\"alert-danger\">  Student Record Not Found </h2> ";   }	else{
			
			foreach( $StudentRecord as $key=>$Value){
		?>
				<tr>
				
                   <td><?php  echo   $StudentRecord [$key]["Addmission_Number"]; ?> </td>
					<td><?php echo	 $StudentRecord [$key]["Name"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["Class"]; ?> </td>
					<td><?php echo	 $StudentRecord [$key]["Addmission_Date"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["Email"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["Gender"]; ?> </td>
					<td><?php echo	 $StudentRecord [$key]["Birthday"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["P_Name"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["P_Phone"] ; ?></td>
					<td><?php echo	 $StudentRecord [$key]["Address"]; ?> </td>
                    
				</tr>
		<?php
			}	}	
		?>
		</tbody>
	</table>

    
    
    
    
    
	</div><!------------end col--->
    
	

</div>
<div style="height: 20px;"></div>

</div>   <!-----end containner--------------------->


</body>

<?php include("script.php"); ?>
</html>
