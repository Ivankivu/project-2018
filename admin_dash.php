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

        <!--sample-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="fontawesome/webcss/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="fontawesome/webcss/css/fa-regular.min.css">
        <link rel="stylesheet" href="fontawesome/webcss/css/fa-regular-400.ttf">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/tyle.css" media="screen">
        <link rel="stylesheet" href="css/dash.css" media="screen">
        <link rel="stylesheet" href="css/propic.css" media="screen">
        <link rel="stylesheet" href="css/clock.css" media="screen">
        <style>
            /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
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
        </style>
        <script src="js/Chart.min.js"></script>
         <script src="js/main.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    exportEnabled: true,
    animationEnabled: true,
    title:{
        text: "State Operating Funds"
    },
    legend:{
        cursor: "pointer",
        itemclick: explodePie
    },
    data: [{
        type: "pie",
        showInLegend: true,
        toolTipContent: "{name}: <strong>{y}%</strong>",
        indexLabel: "{name} - {y}%",
        dataPoints: [
            { y: 26, name: "School Aid", exploded: true },
            { y: 20, name: "Medical Aid" },
            { y: 5, name: "Debt/Capital" },
            { y: 3, name: "Elected Officials" },
            { y: 7, name: "University" },
            { y: 17, name: "Executive" },
            { y: 22, name: "Other Local Assistance"}
        ]
    }]
});
chart.render();
}

function explodePie (e) {
    if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    e.chart.render();

}
</script>

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
        <script >
                    
        </script>

        <?php
         include 'admin-script.php';
        ?>


<script type="text/javascript">
$(document).ready(function()
{  
 
 // code to get all records from table via select box
 $("#getoptions").change(function()
 {    
  var id = $(this).find(":selected").val();

  var dataString = 'action='+ id;
    
  $.ajax
  ({
   url: 'getoptions.php',
   data: dataString,
   cache: false,
   success: function(r)
   {
    $("#display").html(r);
   } 
  });
 })
 // code to get all records from table via select box
});
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
(function($)
{
    $(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $('#myTable').hide();
                $('#loading').show();
            },
            complete: function() {
                $('#loading').hide();
                $('#myTable').show();
            },
            success: function() {
                $('#loading').hide();
                $('#myTable').show();
            }
        });
        var $container = $("#myTable");
        $container.load("loadTable.php");
        var refreshId = setInterval(function()
        {
            $container.load('loadTable.php');
        }, 27000);
    });
})(jQuery);
</script>
        <script src="js/validation.min.js"></script>
        <script src="js/script.js"></script>
        <script src="script.js"></script>
<script src="js/jquery.canvasjs.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script src="js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script src="js/mdb.min.js "></script>
    </body>
    </html>