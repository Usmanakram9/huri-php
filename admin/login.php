<?php
//include 'db.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
    $con = mysqli_connect('localhost','huricpnael_huri1','huri.com','huricpnael_huri') or 
die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM tbluser WHERE user_email='" . $_POST["email"] . "' and user_pass = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["tbluser_id"] = $row['tbluser_id'];
        $_SESSION["user_email"] = $row['user_email'];
        } else {
         $message = "<div class='alert alert-error alert-block'> 
                                <h4 class='alert-heading'>Error!</h4>
                                'Invalid Email or Password!'
                            </div>";
        }
    }
    if(isset($_SESSION["tbluser_id"])) {
    header("Location:index.php");
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
    <link rel="stylesheet" href="css/maruti-login.css" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body>
    <div id="loginbox">
        <form id="loginform" class="form-vertical" method="POST" novalidate="novalidate">
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
            <div class="control-group normal_text">
                <h3><img src="img/logo.png" alt="Logo" /></h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-user"></i></span><input type="text"
                            placeholder="Username" name="email" type="email" required="required" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-lock"></i></span><input type="password"
                            placeholder="Password" name="password" type="password" required="required" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                
                <span class="pull-right"><input type="submit" name="submit" id="submit" class="btn btn-success" value="Login" /></span>
            </div>
        </form>
        
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/maruti.login.js"></script>
    
</body>

</html>