 <link href="assets/css/style.css" rel="stylesheet">
 
<?php

		include 'db.php';
 
 if(isset($_POST['gal']))
        {
           
       
   $sql = "SELECT * FROM tblumrah_gal";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  
 echo '
 <div class="col-lg-3 col-md-4">
            <div class="gallery-item">

              <a href="admin/'. $row["umrpic_des"].'" class="gallery-lightbox" data-gall="gallery-item">
                <img src="admin/'. $row["umrpic_des"].'" alt="" style="width:400px;height:300px;" class="img-fluid">
              </a>
            </div>
          </div>';


 
 }
}

 
 }
 
  if(isset($_POST['map1']))
        {
           
       
             
  $sql = "SELECT * FROM tblumr_map";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  
 echo '
  <div class="col-lg-4 col-md-6">
           
<iframe src="'. $row["umrdir"].'" width="100%" height="480"></iframe>
      
      <div class="member-info">
                <div class="member-info-content">
                  <h4>'. $row["umap_nam"].'</h4>
                  <span>'. $row["umap_city"].'</span>
                </div>
               
              </div>
          </div>';

 
 }
}

 
 }
 
 
  if(isset($_POST['vod1']))
        {
           
       
             
  $sql = "SELECT * FROM tblumr_vdo";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  
 echo '
  <div class="col-lg-4 col-md-4">
           
<iframe width="100%" height="380" src="'. $row["uvdo_link"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
      <div class="member-info">
                <div class="member-info-content">
                  <h4>'. $row["uvdo_titl"].'</h4>
                  <span>'. $row["uvdo_des"].'</span>
                </div>
                
              </div>
          </div>';

 
 }
}

 
 }
 

           
       
             
 
 
 
 
 
  
 
?>

 


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>