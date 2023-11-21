<?php


 $message="";


include 'db.php';
$fname=$_POST['fname'];
$memail=$_POST['memail'];
$subject=$_POST['subject'];
$message=$_POST['message'];
// $com =$_POST['sb'];

echo $name,$email,$subject,$message;

$sql="INSERT INTO `tblmsg` (`msg_nam`, `msg_email`, `msg_subj`, `msg`) VALUES ('$fname','$memail','$subject','$message')";
if ($con->query($sql) === TRUE) {
    $message ='<div class="alert alert-success">
                         Complain Submitted
                        <a href="#" class="alert-link">Sucessfully</a> </div>';
}
else 
{
    $message ='<div class="alert alert-success">
                         Complain Submitted
                        <a href="#" class="alert-link">Sucessfully</a> </div>';
}

 


?>