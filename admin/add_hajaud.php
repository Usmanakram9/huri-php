<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';




  if (isset($_POST['submit'])) { 
      
      $filename = $_FILES['img']['name'];
    

    // destination of the file on the server
    $destination = 'uploads/audio/haj/' .$filename;

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
     $insertQuery  = "INSERT INTO tblhaj_aud (hajaud_descrip,hajaud_nam,hajaud_path,aud_type) VALUES ('$_POST[des]','$filename','$destination','$_POST[audtype]')";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ssss",$_POST['des'],$filename,$destination,$_POST['audtype']);
			$stmt->execute();
             $message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>Success!</h4>
                                'Audio added'                            </div>";
                        
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Audio not added'
                            </div>";
        }
   
   
   
   
        
         } 
        
        
   
    
    
    
    
    
    
    
}





?>


<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Add Hajj Audio</a> </div>
            <h1>Add Hajj Audio</h1>
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
                            <form action="add_hajaud.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                              
                                 <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="des" id="des" required="required" placeholder="Description" />
                                    </div>
                                </div>
                               
                
                                 <div class="control-group">
                                    <label class="control-label">Upload Audio</label>
                                    <div class="controls">
                                        <input type="file" name="img" required="required" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Select Audio Type</label>
                                    <div class="controls">
                                        <select type="audtype" name="audtype">
                                            <option>Urdu</option>
                                            <option>English</option>
                                            <option>Pashto</option>
                                            <option>Arabic</option>
                                        </select>
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