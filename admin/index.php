<?php
session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}
?>
<?php  include 'header.php'?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a></div>
        </div>
        <div class="container-fluid">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li> <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
                    <li> <a href="add_hajgal.php"> <i class="icon-gallery"></i> Add Haj Gallery</a> </li>
                    <li> <a href="add_umrahgal.php"> <i class="icon-camera"></i> Add Umrah Gallery </a> </li>
                    <li> <a href="#"> <i class="icon-people"></i> Manage Users </a> </li>
                    <li> <a href="#"> <i class="icon-calendar"></i> Manage Events </a> </li>
                </ul>
            </div>

           
            <hr>
           
        
          
        </div>
    </div>
    </div>
    </div>
    <?php  include 'footer.php'?>