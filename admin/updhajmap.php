<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';


$message="";

  
$id=$_GET["id"];


$result = mysqli_query($con,"SELECT * FROM tblhaj_map WHERE tblhajmap_id='$id'");
$row= mysqli_fetch_array($result);

 if (isset($_POST['update'])) { // if save button on the form is clicked
   
     $insertQuery  = "update tblhaj_map set hajdir='$_POST[madd]',map_nam='$_POST[bnam]',map_city='$_POST[bpho]' where tblhajmap_id='$_POST[bid]'";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("sss",$_POST['madd'],$map_nam=$_POST['bnam'],$map_city=$_POST['bpho']);
			$stmt->execute();
            
                        header('Location:viewhajmap.php?success=1');
                       

            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'not updated'
                            </div>";
        }
   
   
   
   
        
      
        
        
    }

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Update Hajj Map</a> </div>
            <h1>Update Hajj Map</h1>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <?php if($message!="") { echo $message; } ?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Information</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="updhajmap.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                                <div class="control-group">
                                    <!--<label class="control-label">ID</label>-->
                                    <div class="controls">
                                        <input type="text" class="span11" name="bid" id="bid" value="<?php echo $row['tblhajmap_id'];?>" style="visibility:hidden;"/>
                                    </div>
                                </div>
                              
                                 <div class="control-group">
                                    <label class="control-label">Map Directions</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="madd" id="madd" value="<?php echo $row['hajdir'];?>"/>
                                    </div>
                                </div>
                               
                <div class="control-group">
                                    <label class="control-label">Map Place</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="bnam" id="bnam" value="<?php echo $row['map_nam'];?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Map City</label>
                                    <div class="controls">
                                    <input type="text" class="span11" name="bpho" id="bpho" value="<?php echo $row['map_city'];?>" required="required"/>
                                    </div>
                                </div>
                                
                               
                               
                              
                                
                                <div class="form-actions">
                                    <button type="submit" id="update" name="update" class="btn btn-success">update</button>
                                </div>
                            </form>
                       
                        </div>
                    </div>
                </div>
           
            </div>
      
          
        </div>
    </div>







 <?php  include 'footer.php'?>