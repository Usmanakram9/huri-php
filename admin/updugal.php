<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';

$id=$_GET["id"];


$result = mysqli_query($con,"SELECT * FROM tblumrah_gal WHERE tblumrgal_id='$id'");
$row= mysqli_fetch_array($result);


  if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    
    if ($_FILES['img']['name'] == "")
{
 
             header('Location:viewumrahgal.php?success=0');
 } 
 else
 {
    
       $filename = $_FILES['img']['name'];
    

    // destination of the file on the server
    $destination = 'uploads/umrahgallery/' .$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];

    if (!in_array($extension, ['mp3'])) {
         $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'file must be only mp3'
                            </div>";
    } elseif ($_FILES['img']['size'] > 20000000) { // file shouldn't be larger than 20Megabyte
         $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Audio size is huge'
                            </div>";
    }
      
        // move the uploaded (temporary) file to the specified destination
         if (move_uploaded_file($file, $destination)) {
     $insertQuery  = "update tblumrah_gal set umrpic_nam='$filename',umrpic_des='$destination' where tblumrgal_id='$_POST[bid]'";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ssss",$filename,$destination);
			$stmt->execute();
             header('Location:viewumrahgal.php?success=1');
                        
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Picture not added'
                            </div>";
        }
   
   
   
   
        
         } 
        
        
   
    
 }
    
}




?>


<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Update Umrah Gallery</a> </div>
            <h1>Update Umrah Gallery</h1>
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
                            <form action="updugal.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                               <div class="control-group">
                                    <!--<label class="control-label">ID</label>-->
                                    <div class="controls">
                                        <input type="text" class="span11" name="bid" id="bid" value="<?php echo $row['tblumrgal_id'];?>" style="visibility:hidden;"/>
                                    </div>
                                </div>
                                
                               
                
                                 <div class="control-group">
                                    <label class="control-label">Upload Picture</label>
                                    <div class="controls">
                                        <input type="file" name="img" id="img"/> <label><?php echo $row['umrpic_nam'];?></label>
                                    </div>
                                </div>
                                
                               
                               
                              
                                
                                <div class="form-actions">
                                    <button type="submit" id="submit" name="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
            </div>
      
          
        </div>
    </div>







 <?php  include 'footer.php'?>