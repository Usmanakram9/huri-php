<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';

$id=$_GET["id"];

$result = mysqli_query($con,"SELECT * FROM tblumr_aud WHERE tblumraud_id='$id'");
$row= mysqli_fetch_array($result);


  if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    
    if ($_FILES['img']['name'] == "")
{
    // cover_image is empty (and not an error)

      

    
     
        
        
     $insertQuery  = "update tblumr_aud set umraud_descrip='$_POST[des]',aud_type='$_POST[audtype]' where tblumraud_id='$_POST[bid]'";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ss",$_POST['des'],$_POST['audtype']);
			$stmt->execute();
             header('Location:viewuaud.php?success=1');
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Audio not added'
                            </div>";
        }
   

 } 
 else
 {
    
       $filename = $_FILES['img']['name'];
    

    // destination of the file on the server
    $destination = 'uploads/audio/umrah/' .$filename;

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
     $insertQuery  = "update tblumr_aud set umraud_descrip='$_POST[des]',umraud_nam='$filename',umraud_path='$destination',aud_type='$_POST[audtype]' where tblumraud_id='$_POST[bid]'";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ssss",$_POST['des'],$filename,$destination,$_POST['audtype']);
			$stmt->execute();
             header('Location:viewuaud.php?success=1');
                        
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Audio not adsfjkl added'
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
                    Home</a> <a href="#" class="tip-bottom">Update Umrah Audio</a> </div>
            <h1>Update Umrah Audio</h1>
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
                            <form action="updumraud.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                               <div class="control-group">
                                    <!--<label class="control-label">ID</label>-->
                                    <div class="controls">
                                        <input type="text" class="span11" name="bid" id="bid" value="<?php echo $row['tblumraud_id'];?>" style="visibility:hidden;"/>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="des" id="des" value="<?php echo $row['umraud_descrip'];?>" required="required" placeholder="Description" />
                                    </div>
                                </div>
                               
                
                                 <div class="control-group">
                                    <label class="control-label">Upload Audio</label>
                                    <div class="controls">
                                        <input type="file" name="img" id="img"/> <label><?php echo $row['umraud_nam'];?></label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Select Audio Type</label>
                                    <div class="controls">
                                        <select type="audtype"  name="audtype">
                                            <option <?=$row['aud_type'] == 'Urdu' ? ' selected="selected"' : '';?>>Urdu</option>
                                            <option <?=$row['aud_type'] == 'English' ? ' selected="selected"' : '';?>>English</option>
                                            <option <?=$row['aud_type'] == 'Pashto' ? ' selected="selected"' : '';?>>Pashto</option>
                                            <option <?=$row['aud_type'] == 'Arabic' ? ' selected="selected"' : '';?>>Arabic</option>
                                        </select>
                                    </div>
                                </div>
                               
                               
                              
                                
                                <div class="form-actions">
                                    <button type="submit" id="submit" name="submit" class="btn btn-success">Upate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
            </div>
      
          
        </div>
    </div>







 <?php  include 'footer.php'?>