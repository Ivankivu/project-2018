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
if (isset($_SESSION['user_session']) && $_SESSION['user_role']!=="administrator") {
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
        <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">

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

            input.hidden {
                position: absolute;
                left: -9999px;
            }

            #profile-image1 {
                cursor: pointer;

                width: 100px;
                height: 100px;
                border: 2px solid #03b1ce;
            }

            .tital {
                font-size: 16px;
                font-weight: 500;
            }

            .bot-border {
                border-bottom: 1px #f8f8f8 solid;
                margin: 5px 0 5px 0
            }
        </style>
        <script src="js/jquery-1.11.3-jquery.min.js"></script>
        <script src="js/validation.min.js"></script>
        <script src="script.js"></script>
        <script src="js/sinch.min.js"></script>
        <link href="datatables/dataTables.bootstrap4.js" rel="stylesheet">
        <script src="charts/Chart.bundle.min.js"></script>
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/sb-admin-charts.min.js"></script>
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

            include 'admin-content.php';

    ?>
        </div>
        <div id="profile-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
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
                        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.modal -->

        <?php
    include 'admin-script.php';
?>
    </body>

    </html>