<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';


if(isset($_GET["del"])){
$result = "DELETE FROM tblumrah_gal WHERE tblumrgal_id='".$_GET['del']."'";
if(mysqli_query($con, $result)){
$message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>Success!</h4>
                                'Recorded deleted Succesfully'                            </div>";
                                
                                
    
}
}

if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
      $message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>Success!</h4>
                                'Updated Succesfully'                            </div>";
}
elseif ( isset($_GET['success']) && $_GET['success'] == 0 ){
    $message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>NO Changes</h4>
                                '*are made*'                            </div>";
}

?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Umrah Gallery</a> </div>
            <h1>Umrah Gallery</h1>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <?php if($message!="") { echo $message; } ?>
                   <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>information</h5>
                        </div>
                        <div class="widget-content nopadding" id="getgal">
                            
                                
                        </div>
                    </div>
                    
                </div>
           
            </div>
      
          
        </div>
    </div>

<script type="text/javascript">
  $(document).ready(function(){
  
      getumr();
  });
  function getumr()
      {
        
        var getumr="getumr";
        $.ajax({
          url:"gal.php",

        type:"post",
        data:{ getumr:getumr },
        success:function(data,status){
          $('#getgal').html(data);

        }
      });
      
      }   
     
    </script>






 <?php  include 'footer.php'?>