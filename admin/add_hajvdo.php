<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';




  if (isset($_POST['submit'])) { // if save button on the form is clicked
   
     $insertQuery  = "INSERT INTO tblhaj_vdo (vdo_link,vdo_titl,vdo_des) VALUES ('$_POST[madd]','$_POST[pnam]','$_POST[cit]')";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("sss",$_POST['cit'],$_POST['madd'],$_POST['pnam']);
			$stmt->execute();
             $message ="<div class='alert alert-success alert-block'> 
                                <h4 class='alert-heading'>Success!</h4>
                                'Video added'                            </div>";
                        
            }
         else {
           $message ="<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Failed!</h4>
                                'Video not added'
                            </div>";
        }
   
   
   
   
        
      
        
        
    }
//     else{
//      $message ="<div class='alert alert-error alert-block'> 
//                             <h4 class='alert-heading'>Error!</h4>
//                             'Map Cannot be added'
//                         </div>";
        
        
//  }
    


?>


<?php  include 'header.php'?>





    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#" class="tip-bottom">Add Hajj Video</a> </div>
            <h1>Add Hajj Video</h1>
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
                            <form action="add_hajvdo.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                              
                                 <div class="control-group">
                                    <label class="control-label">Video Link</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="madd" id="madd" required="required" placeholder="Please write embedded link" />
                                    </div>
                                </div>
                               
                <div class="control-group">
                                    <label class="control-label">Video title</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="pnam" id="pnam" required="required" placeholder="Video Title" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Video Description</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="cit" id="cit" required="required" placeholder="Description" />
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