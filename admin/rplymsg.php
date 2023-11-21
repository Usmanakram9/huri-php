<?php

session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}


include 'db.php';


$message="";

  
$id=$_GET["id"];


$result = mysqli_query($con,"SELECT * FROM tblmsg WHERE tblmsg_id='$id'");
$row= mysqli_fetch_array($result);

 if (isset($_POST['update'])) { // if save button on the form is clicked
   
     $insertQuery  = "update tblmsg set msg_rpl='$_POST[msg]' where tblmsg_id='$_POST[bid]'";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("s",$_POST['msg']);
			$stmt->execute();
            
                        header('Location:viewmsg.php?success=1');
                       
$to = "$_POST[bnam]";
$subject = "Message";

$message = "
<html>
<head>
<title>Welcome!</title>
</head>
<body>
<p>Hello $_POST[madd] <br>

Thank you for Contacting Us!.With reference to your email subject. $_POST[msg]

<br>
<br>
Kind Regards,
</p>
<table>

<tr>
<td>Huri</td>
<td></td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@huri.com.pk>' . "\r\n";


mail($to,$subject,$message,$headers);
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
                    Home</a> <a href="#" class="tip-bottom">Reply to Message</a> </div>
            <h1>Reply to message</h1>
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
                            <form action="rplymsg.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
                                <div class="control-group">
                                    <!--<label class="control-label">ID</label>-->
                                    <div class="controls">
                                        <input type="text" class="span11" name="bid" id="bid" value="<?php echo $row['tblmsg_id'];?>" style="visibility:hidden;"/>
                                    </div>
                                </div>
                              
                                 <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="madd" id="madd" value="<?php echo $row['msg_nam'];?>"   readonly/>
                                    </div>
                                </div>
                               
                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="bnam" id="bnam" value="<?php echo $row['msg_email'];?>"   readonly/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Subject</label>
                                    <div class="controls">
                                    <input type="text" class="span11" name="bpho" id="bpho" value="<?php echo $row['msg_subj'];?>" required="required"  readonly/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Message</label>
                                    <div class="controls">
                                    <input type="text" class="span11" name="bdate" id="bdate" value="<?php echo $row['msg'];?>" required="required"  readonly/>
                                    </div>
                                </div>
                                 
                                 <div class="control-group">
                                    <label class="control-label">Reply</label>
                                    <div class="controls">
                                    <textarea type="text" class="span11" name="msg" id="msg" rows="4" cols="5" maxlength="200" required="required"></textarea>
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