<?php
/**
 * Parses and verifies the file doc comment.
 * 
 * @category  Class
 * @package   IUEA
 * @author    Ivan kivumbi <ivankivu@gmail.com>
 * @copyright 2018 IUEA
 * @license   https://github.com/Ivankivu/IUEA.git MIT Licence
 * @link      https://github.com/Ivankivu/IUEA.git
 */
session_start();
if (!isset($_SESSION['user_session'])) {
    header("Location: index.php");
}
require_once 'dbconfig.php';
$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard | Emergency Track and Response System</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
<link rel="stylesheet" href="css/tyle.css">
<link rel="stylesheet" href="style/style.css">
<link href="dash.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/mdb.min.css">



<!--sample-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/clock.css">

    <!-- Font Awesome -->
<link rel="stylesheet" href="fontawesome/webcss/css/fontawesome-all.min.css">
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 

    <!-- Material Design Bootstrap -->
 <!--link href="css/mdb.css" rel="stylesheet"-->   
<!--link href="css/mdb.min.css" rel="stylesheet"-->
<link href="css/dash.css" rel="stylesheet">
    <!-- MAIN CSS -->

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
<script src="js/jquery-1.11.3-jquery.min.js"></script>
<script src="js/sinch.min.js"></script>
</head>

<body style="overflow:hidden;">
<!--Navbar-->
<?php
    include 'navbar.php';
?>
<!--/.Navbar-->

 <?php
    include 'content.php';
?>   
    
<?php
    include 'scripts.php';
?>
</body>
</html>