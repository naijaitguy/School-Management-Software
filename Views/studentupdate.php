<?php
session_start();
if(!isset($_SESSION['addnum'])){header("location:?page=index");} else {
}?>  
<?php


	
$data = new Controller();
$data->Add_Update();


?>
<?php  include("side.php");?>
<?php  include("header.php");?> 
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<?php include("student_button.php"); ?>
<div class=" container-fluid" >


<div class="row">    

<h3 class="text-center text-primary" style="margin-left:50px;"  > UPDATE STUDENT </h3>


</div>

<div class="row" style="padding:10px;">


<div class=" col-md-4 col-xs-offset-1  " style="margin-left:70px;" >
 <span  class=" error">  <?php echo  $data->Error_allfields;  ?></span>

 <form action="<?php echo htmlspecialchars("?page=studentupdate");?>" method="post"  role="form">
   
  <div class=" form-group-sm  ">
    
 <label for="FirstName"> Full Name:</label>
  <input type="text" class="form-control" required name="FirstName" value="<?php  echo $_SESSION['Name'] ; ?>"/>
    
    
  </div>
  
  <span  class=" error">  <?php echo $data->Name_error; ?></span>
   
     
   
   
  <div class=" form-group-sm  ">
    
  <label for="phone"> Phone Number</label>
    
  <input  class="form-control" required  type="tel" name="Phone"  value="<?php  echo $_SESSION['Phone'] ; ?>" >
    
    
  </div>
  

    
   <div class=" form-group-sm ">
    
  <label for="Gender"> Gender</label>
     
  <select  class="form-control" name="Gender" >
    
  <option  value="Male"> Male</option>
  <option  value="Female"> Female</option>
    
  </select>
    
    
  </div>
  

  
  
  <span class=" error"> <?php echo $data->Name_error; ?>  </span> 
   
   
   
 <div class=" form-group-sm  ">
    
 <label for="class"> Current Class </label><br>
    
  <select  name="Class" required class=" form-control" >
    
  <option  value=""> Select  Class</option>
  <option  value="jss1"> J S S 1</option>
  <option  value="jss2"> J S S 2</option>
 <option  value="jss3"> J S S 3 </option>
  <option  value="sss1"> S S S 1</option>
   <option  value="sss2"> S S S 2</option>
    <option  value="sss3"> S S S 3</option>  
  </select>
  </div>
  
  <span class=" error"> <?php echo $data->Error_Phone;  ?></span>
  
  
  
     
 <div class=" form-group-sm  ">
    
 <label for="class"> Academic year  </label><br>
    
  <select  name="Year" required class=" form-control" >
    
  <option  value=""> Select  Year </option>
  <option  value="2018"> 2018</option>
  <option  value="2019"> 2019</option>
 <option  value="2020"> 2020 </option>
  <option  value="2021"> 2021 </option>
   <option  value="2022"> 2022 </option>
     
  </select>
  </div>
  
  <span class=" error"> <?php echo $data->Error_Phone;  ?></span>


    
      <span class=" error"> <?php echo $data->Error_Phone; ?></span>
    
<div class=" form-group-sm  ">
    
  <label for="Addmission_Number"> ADDMISSION NUMBER </label><br>
    
  <input class="form-control" disabled  type="text" name="Addmission_Number" value="<?php  echo $_SESSION['addnum'];?>">
   </div>
  
    
    
    </div>  <!-------end  div --------------------->
    
    
    <div class=" col-md-4 col-xs-offset-1  " >
    
    
    
    
    
   
  <div class=" form-group-sm  ">
    
  <label for="Email"> Email</label>
    
  <input  class="form-control"   type="email" required name="Email" value="<?php  echo $_SESSION['Email'] ; ?>">
    
</div>
  
<span class=" error"> <?php  echo  $data->Error_Email; ?></span>
       
<span class=" error"> <?php echo $data->Error_Phone; ?></span>
    
<div class=" form-group-sm  ">
    
  <label for="Birth"> Date Of Birth </label><br>
    
  <input class="form-control" type="date" name="Birth">
   </div>
  
    
    <div class=" form-group-sm  ">
    
  <label for="add"> Addmission Date  </label><br>
    
  <input class="form-control " type="date" name="Addmission_Date" value=" <?php $_SESSION['Addmission_Date'] ?> ">
   </div>
      
   <div class=" form-group-sm ">
    
  <label for="FirstName"> Parent  Names</label>
    
  <input  class="form-control" type="text" name="P_Name" value="<?php  echo $_SESSION['P_Name'] ; ?>">
    
    
  </div>
  
  <span class=" error"> <?php echo $data->Name_error; ?>  </span> 
   
   
   
 <div class=" form-group-sm  ">
    
  <label for="FirstName"> Parent Phone Number</label>
    
  <input  class="form-control"  type="tel" name="P_Phone" value="<?php  echo $_SESSION['P_Phone'] ; ?>">
    
    
  </div>
  
  
  
  <div class=" form-group-sm ">
    
  <label for="FirstName"> Parent Address </label>
    
  <input  class="form-control" type="text" name="P_Address" value="<?php  echo $_SESSION['P_Address'] ; ?>">
    
    
  </div><p>
  
  
    <div  class="btn-group-lg" style="margin-top:50px;">
  
 <button  class="btn form-control  btn-primary"  name="save" type="submit"  style="margin:10px; padding:5px;" > PREVIEW UPDATES   </button></div>
    
  
    
    </div>
    
</form>




</div> <!-------end  row  --------------------->

</div><!-------en



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
