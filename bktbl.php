<?php


 $message="";


include 'db.php';
$bkname=$_POST['bkname'];
$bkemail=$_POST['bkemail'];
$bkphone=$_POST['bkphone'];
$bkdate=$_POST['bkdate'];
$bktime=$_POST['bktime'];
$bkfcity=$_POST['bkfcity'];
$bktcity=$_POST['bktcity'];
$bkair=$_POST['bkair'];
$bkpeople=$_POST['bkpeople'];
$bkmsg=$_POST['bkmsg'];



               
                 

echo $name,$email,$subject,$message;

$sql="INSERT INTO `tblbook` (`bknam`, `bkemail`, `bkphone`, `bkdate`, `bktime`, `bkfcity`, `bktcity`, `bkair`, `bkppl`, `bkmsg`) VALUES ('$bkname','$bkemail','$bkphone','$bkdate','$bktime','$bkfcity','$bktcity','$bkair','$bkpeople','$bkmsg')";
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