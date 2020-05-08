<?php
session_start();
if(!isset($_SESSION['UserName'])){header("location:?page=index");} else {
}?>
<?php  include("side.php");?>
<?php  include("header.php");?>   
        

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<body>

<div class=" container-fluid" >

<div class="row">    


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
