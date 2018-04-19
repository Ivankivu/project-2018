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

if (isset($_SESSION['user_session'])!="") {
    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/mdb.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/script.js"></script>

</head>

<body style="height:100%;background:url('images/bg-05.jpg');background-repeat:no-repeat;background-size:cover;">
    
<div class="signin-form">

	<div class="card container-fluid" style="background-color:lightgrey;margin-top:200px;padding:5px; width:30%;">
     
        <div class="card-body">
       <form class="md-form form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading text-center">Log In to WebApp.</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="md-form form-group">
        <input type="email" class="form-control" placeholder="" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="md-form form-group">
        <input type="password" class="form-control" placeholder="" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="md-form form-group" style="margin-left:100px;">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div>  
      
      </form>
</div>
    </div>
    
</div>
    
<script src="js/bootstrap.min.js"></script>

</body>
</html>