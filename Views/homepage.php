<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {
}?>
<?php  
include("side.php");
include("header.php");
?>     


<body>

<div class=" container-fluid" >

<div class="row"> 
        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> Your Login Was successful.Thanks 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
</div>

</div>

<div class="row" style="margin-top:20px;">


 <div class="col-md-3  "> <a href="?page=student">  <button class="btn-block btn btn-success block ">  STUDENT  <br>  <i class="fa fa-users" style="font-size:36px"></i></button> </a> </div>

<div class="col-md-3 " >   <a href="?page=grade">  <button class="btn-block btn btn-primary block">  GRADE <br> <i class="fa fa-bar-chart" style="font-size:36px"></i> </button> </a>   </div>

<div class="col-md-3 " >   <a href="?page=courses">  <button class="btn-block btn   btn-danger block " >  COURSES  <br>  <i class="fa fa-mortar-board" style="font-size:36px"></i> </button> </a> </div>

<div class="col-md-3 ">    <a href="?page=teacher">  <button class="btn-block btn btn-info block">  TEACHERS <br>  <i class="fa fa-user-circle" style="font-size:36px"></i> </button> </a> </div>

 



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
