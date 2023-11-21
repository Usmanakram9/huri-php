<?php
session_start();
if(!isset($_SESSION['user_email']) && !isset($_SESSION['user_pass']) && !isset($_SESSION['tbluser_id']))
{
	header('location:../admin/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, maruti admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, maruti design, maruti dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Maruti is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/maruti-admin/" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/maruti-style.css" />
    <link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="index.php"></a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-messaages-->
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
        <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a
            class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span
                class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i
                class="icon-shopping-cart"></i></a> </div>
    <!--close-top-Header-messaages-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            
            
            <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span
                        class="text">Logout</span></a></li>
        </ul>
    </div>
    <!-- <div id="search">
        <input type="text" placeholder="Search here..." />
        <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
    </div> -->
    <!--close-top-Header-menu-->

    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
            
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Hajj Add</span> </a>
                <ul>
                    <li><a href="add_hajgal.php">Add Hajj Gallery</a></li>
                      <li><a href="add_hajaud.php">Add Hajj Audio</a></li>
                    <li><a href="addhaj_map.php">Add Hajj Map</a></li>
                    <li><a href="add_hajvdo.php">Add Hajj video</a></li>
                    
               
                    
                </ul>
            </li>
            
             <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Umrah Add</span> </a>
                <ul>
                 
                    
                    <li><a href="add_umrahgal.php">Add Umrah Gallery</a></li>
                    <li><a href="add_umraud.php">Add Umrah Audio</a></li>
                    <li><a href="addumr_map.php">Add Umrah Map</a></li>
                    <li><a href="add_umrvdo.php">Add Umrah Video</a></li>
                    
                </ul>
            </li>
            
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>View Hajj</span> </a>
                <ul>
                 
                    
                    <li><a href="viewhajgal.php">View Hajj Gallery</a></li>
                    <li><a href="viewhajmap.php">View Hajj Map</a></li>
                    <li><a href="viewhajvdo.php">View Hajj Video</a></li>
                    <li><a href="viewhaud.php">View Hajj Audio</a></li>
                    
                </ul>
            </li>
            
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>View Umrah</span> </a>
                <ul>
                 
                    
                    <li><a href="viewumrahgal.php">View Umrah Gallery</a></li>
                    <li><a href="viewumrahmap.php">View Umrah Map</a></li>
                    <li><a href="viewumrahvdo.php">View Umrah Video</a></li>
                    <li><a href="viewuaud.php">View Umrah Audio</a></li>
                    
                </ul>
            </li>
            
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Others</span> </a>
                <ul>
                 
                    
                    <li><a href="viewmsg.php">View Messages</a></li>
                    <li><a href="viewboktbl.php">Book Ticket requests</a></li>
                    
                    
                </ul>
            </li>
           
            
           
        </ul>
    </div>