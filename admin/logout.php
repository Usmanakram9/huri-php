<?php
session_start();
unset($_SESSION["tbluser_id"]);
unset($_SESSION["user_email"]);
header("Location:login.php");
?>