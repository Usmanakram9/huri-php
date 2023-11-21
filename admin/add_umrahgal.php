<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';




  if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
      $filename = $_FILES['img']['name'];
    

    // destination of the file on the server
    $destination = 'uploads/umrahgallery/' .$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];

    if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
         $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'file must be an image'
                            </div>";
    } elseif ($_FILES['img']['size'] > 20000000) { // file shouldn't be larger than 20Megabyte
         $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Image size is huge'
                            </div>";
    }
      elseif(!fileExists($filename)) {
        // move the uploaded (temporary) file to the specified destination
         if (move_uploaded_file($file, $destination)) {
     $insertQuery  = "INSERT INTO tblumrah_gal (umrpic_nam,umrpic_des) VALUES ('$filename','$destination')";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ss",$filename,$destination);
			$stmt->execute();
             $message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>Success!</h4>
                                'Gallery image added'                            </div>";
                        
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Gallery not added'
                            </div>";
        }
   
   
   
   
        
         } 
        
        
    }
    else{
     $message ="<div class='alert alert-error alert-block'> 
                            <h4 class='alert-heading'>Error!</h4>
                            'Gallery Cannot be added'
                        </div>";
        
        
 }
    
    
    
    
    
    
}

function fileExists($filename){
	$query = "SELECT picname FROM tblhaj_gal WHERE picname= $filename";
	global $con;
	if($stmt = $con->prepare($query)){
		$stmt->bind_param("s", $filename);
		$stmt->execute();
		$stmt->store_result();
		$stmt->fetch();
		if($stmt->num_rows == 1){
			$stmt->close();
			return true;
		}
		$stmt->close();
	}
 
	return false;
}



?>


<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Add Umrah Gallery</a> </div>
            <h1>Add Umrah Gallery</h1>
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
                            <form action="add_umrahgal.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                              
                                
                               
                               
                                
                              
                                 <div class="control-group">
                                    <label class="control-label">Upload Image</label>
                                    <div class="controls">
                                        <input type="file" name="img" />
                                    </div>
                                </div>
                               
                               
                              
                                
                                <div class="form-actions">
                                    <button type="submit" id="submit" name="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
            </div>
      
          
        </div>
    </div>







 <?php  include 'footer.php'?>