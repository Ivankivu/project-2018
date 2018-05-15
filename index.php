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
require_once 'dbconfig.php';

if (isset($_SESSION['user_session'])!=="" && isset($_SESSION['user_role']) == "administrator") {
    header("Location: admin_dash.php");

} elseif (isset($_SESSION['user_session'])!=="" && isset($_SESSION['user_role']) == "agent") {
    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ETARS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/dash.css" rel="stylesheet" type="text/css" media="screen">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/webcss/css/fontawesome-all.min.css">
    <script type="text/javascript" src="js/script.js"></script>
<script>
    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background: #222222;
        z-index: 1000;
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    #loader {
        z-index: 1001;
        /* anything higher than z-index: 1000 of .loader-section */
    }

    h1 {
        color: #EEEEEE;
    }

    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(-100%);
        /* IE 9 */
        transform: translateX(-100%);
        /* Firefox 16+, IE 10+, Opera */
    }

    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(100%);
        /* IE 9 */
        transform: translateX(100%);
        /* Firefox 16+, IE 10+, Opera */
    }
</script>
</head>

<body style="height:100%;">
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <div class="signin-form container-fluid">

        <div class="row mb-5">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center"><h1 style="font-size: 50px;" >E*T*A*R*S</h1></div>
            <div class="col-md-1"></div>
        </div>

         <div class="row mb-5">
            <div class="col-md-4"></div>

            <div class="col-md-4 d-inline-block" >
                <div class="row">
                        <div class="col-sm-4">
                        <img class="img-thumbnail " src="images/icons8_Police_100px.png" style="width:100px;height:100px;" />
                        </div>
                        <div class="col-sm-4">
                        <img class="img-thumbnail " src="images/icons8_Ambulance_100px.png" style="width:100px;height:100px;" />
                        </div>
                        <div class="col-sm-4">
                        <img class="img-thumbnail " src="images/icons8_Fire_Truck_100px.png" style="width:100px;height:100px;padding:5px" />
                        </div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-body">
                    <form class="md-form form-signin " method="post" id="login-form">

                    <h2 class="form-signin-heading text-center">Login</h2>

                    <div id="error">
                        <!-- error will be shown here ! -->
                    </div>

                    <div class="md-form form-group ml-4">
                        
                        <i class="fas fa-envelope prefix blue-text mt-4"></i>
                        <input type="email" class="form-control " placeholder="email" name="user_email" id="user_email" style="width:360px;">
                        <span id="check-e"></span>
                    </div>

                    <div class="md-form form-group ml-4">
                       
                         <i class="fas fa-lock prefix blue-text mt-4"></i>
                        <input type="password" class="form-control" placeholder="password" name="password" id="password" style="width:360px;">
                    </div>

                    <div class="md-form form-group ml-5">
                        <button type="submit" class="btn btn-blue" name="btn-login" id="btn-login">
                            <span class="fa fa-sign-in-alt"></span> &nbsp; Sign In</button>
                    </div>
                </form></div></div>
            <div class="col-md-2"></div>
        </div>
        
    </div>

    </html>