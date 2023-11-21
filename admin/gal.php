
<?php

		include 'db.php';
 
 if(isset($_POST['getgal']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Pic Name</th>
      <th>Pic Destination</th>
      <th>View Picture</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblhaj_gal";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["picname"].'</td>
                                        <td>'. $row["picdest"].'</td>
                                        <td ><img src="'. $row["picdest"].'" width="100px" /></td>
                                        <td ><a href="updhgal.php?id='.$row["tblhajgal_id"].'">Edit</a> | <a href="viewhajgal.php?del='.$row["tblhajgal_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}

if(isset($_POST['getumr']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Pic Name</th>
      <th>Pic Destination</th>
      <th>View Picture</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblumrah_gal";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["umrpic_nam"].'</td>
                                        <td>'. $row["umrpic_des"].'</td>
                                        <td ><img src="'. $row["umrpic_des"].'" width="100px" /></td>
                                        <td ><a href="updugal.php?id='.$row["tblumrgal_id"].'">Edit</a> | <a href="viewumrahgal.php?del='.$row["tblumrgal_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}


if(isset($_POST['gethmap']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Map Link</th>
      <th>Place Name</th>
      <th>City</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblhaj_map";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["hajdir"].'</td>
                                        <td>'. $row["map_nam"].'</td>
                                        <td >'. $row["map_city"].'</td>
                                        <td ><a href="updhajmap.php?id='.$row["tblhajmap_id"].'">Edit</a> | <a href="viewhajmap.php?del='.$row["tblhajmap_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}




if(isset($_POST['getumap']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Map Link</th>
      <th>Place Name</th>
      <th>City</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblumr_map";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["umrdir"].'</td>
                                        <td>'. $row["umap_nam"].'</td>
                                        <td >'. $row["umap_city"].'</td>
                                        <td ><a href="updumrmap.php?id='.$row["tblumrmap_id"].'">Edit</a> | <a href="viewumrahmap.php?del='.$row["tblumrmap_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}





if(isset($_POST['gethvdo']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Video Link</th>
      <th>Video Title</th>
      <th>Video Description</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblhaj_vdo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["vdo_link"].'</td>
                                        <td>'. $row["vdo_titl"].'</td>
                                        <td >'. $row["vdo_des"].'</td>
                                        <td ><a href="updhajvdo.php?id='.$row["tblhajvdo_id"].'">Edit</a> | <a href="viewhajvdo.php?del='.$row["tblhajvdo_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}


if(isset($_POST['getuvdo']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Video Link</th>
      <th>Video Title</th>
      <th>Video Description</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblumr_vdo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["uvdo_link"].'</td>
                                        <td>'. $row["uvdo_titl"].'</td>
                                        <td >'. $row["uvdo_des"].'</td>
                                        <td ><a href="updumrvdo.php?id='.$row["tblumrvdo_id"].'">Edit</a> | <a href="viewumrahvdo.php?del='.$row["tblumrvdo_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}



if(isset($_POST['gethaud']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Audio Description</th>
      <th>Audio Name</th>
      <th>Audio Path</th>
      <th>Audio Type</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblhaj_aud";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["hajaud_descrip"].'</td>
                                        <td>'. $row["hajaud_nam"].'</td>
                                        <td >'. $row["hajaud_path"].'</td>
                                        <td >'. $row["aud_type"].'</td>
                                        <td ><a href="updhajaud.php?id='.$row["tblhajaud_id"].'">Edit</a> | <a href="viewhaud.php?del='.$row["tblhajaud_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}


if(isset($_POST['getuaud']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Audio Description</th>
      <th>Audio Name</th>
      <th>Audio Path</th>
      <th>Audio Type</th>
      
       <th>Action</th>
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblumr_aud";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["umraud_descrip"].'</td>
                                        <td>'. $row["umraud_nam"].'</td>
                                        <td >'. $row["umraud_path"].'</td>
                                        <td >'. $row["aud_type"].'</td>
                                        <td ><a href="updumraud.php?id='.$row["tblumraud_id"].'">Edit</a> | <a href="viewuaud.php?del='.$row["tblumraud_id"].'">Delete</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}



if(isset($_POST['getmsg']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Sender Name</th>
      <th>Sender Email</th>
      <th>Sender Subject</th>
      <th>Sender Message</th>
      <th>Reply</th>
      <th>Action</th>
      
     
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblmsg";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["msg_nam"].'</td>
                                        <td>'. $row["msg_email"].'</td>
                                        <td>'. $row["msg_subj"].'</td>
                                        <td>'. $row["msg"].'</td>
                                        <td>'. $row["msg_rpl"].'</td>
                                        
                                        <td ><a href="rplymsg.php?id='. $row["tblmsg_id"].'">Reply</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}



if(isset($_POST['getbkd']))
        {
           
          echo '<table class="table table-bordered table-striped">
    <thead>
      <tr class="text-center">
      <th>Booker Name</th>
      <th>Booker Email</th>
      <th>Booker Phone</th>
      <th>Booker Date</th>
      <th>Booker Time</th>
      <th>Booker City</th>
      <th>To City</th>
      <th>Booker Airline</th>
      <th>No. Of people</th>
      <th>Booker Message</th>
      <th>Reply</th>
      <th>Action</th>
      
     
      
        
  </tr>
</thead>
<tbody>';
             
  $sql = "SELECT * FROM tblbook";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
 echo '<tr class="odd gradeX">
                                        <td>'. $row["bknam"].'</td>
                                        <td>'. $row["bkemail"].'</td>
                                        <td>'. $row["bkphone"].'</td>
                                        <td>'. $row["bkdate"].'</td>
                                        <td>'. $row["bktime"].'</td>
                                        <td>'. $row["bkfcity"].'</td>
                                        <td>'. $row["bktcity"].'</td>
                                        <td>'. $row["bkair"].'</td>
                                        <td>'. $row["bkppl"].'</td>
                                        <td>'. $row["bkmsg"].'</td>
                                        <td>'. $row["bkrply"].'</td>
                                        
                                        <td ><a href="rplybk.php?id='. $row["tblbook_id"].'">Reply</a></td>
                                            
                                        
                                    </tr>
  ';

 
 }
}

 
 echo '</tbody></table>  
';}


?>