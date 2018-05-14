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
require_once 'dbconfig.php'; 
session_start();
if ($_SESSION['user_role']!=="agent") {
    header("Location: index.php");
}
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
<link rel="stylesheet" href="css/propic.css">


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
<script src="js/validation.min.js"></script>
<script src="js/script.js"></script>
</head>

<body style="overflow:hidden;height:100%;">
<div class="row" style="top:0;height:7%">
<!--Navbar-->
<?php
    include 'navbar.php';
?>
<!--/.Navbar-->
    </div>
<div class="row" style="height:93%;z-index:300px;">
 <?php
    include 'content.php';
?>   
  </div>  
  <div id="profile-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h2 class="modal-title form-signin-heading">
                    <i class="fa fa-user"></i>User Profile
                </h2> 
                <div data-dismiss="modal" style="float:right;">x</div>
            </div>
            <div class="modal-body">

<?php
                include 'User.php';
                ?>
          
           </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit" >
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            </div>

        </div>
    </div>
</div>
                       <!-- /.modal -->    
              <script scr="map.js"></script>   
              <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy5ccVAXNyGvz9h_q1UeU_iMm6b-JJb_Y&callback=initMap">
</script>     
<?php
    include 'scripts.php';
?>

</body>
</html>