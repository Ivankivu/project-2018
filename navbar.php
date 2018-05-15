<div class="container-fluid">
    <!--Navbar-->
    <nav class="navbar navbar-fixed navbar-light warning-color col-md-12" style="position:absolute;top:0;">

        <!-- Navbar brand -->
        <a class="navbar-brand ml-3" href="#"><h2>ETARS</h2></a>
        <div class="pull-right">
        <?php

$query = "SELECT * FROM tbl_users where user_id=".$_SESSION['user_id']."";
$stmt = $db_con->prepare($query);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <div style="float:left;padding-top:10px;"><h4>Hi <?php echo $row["first_name"]; ?>!&nbsp;&nbsp;</h4></div>
            <?php
}
            ?>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                   <img class="avatar dropdown-toggle"  data-toggle="dropdown" src="images/bg-11.jpg" role="button" aria-haspopup="true" aria-expanded="false" alt="Avatar">
                    <ul class="dropdown-menu " style="margin-left:-100px;">
                        <li><a href="#" class="dropdown-item dropdown-warning" data-toggle="modal" data-target="#profile-modal"><i class="fa fa-user"></i>&nbsp;&nbsp;View Profile</a></li>
                        <li><a href="logout.php" class="dropdown-item"><span class="fa fa-power-off"></span>&nbsp;&nbsp;&nbsp;logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="row clock">
            <div class="hours"></div>
            <!--
   -->
            <div class="minutes"></div>
            <!--
    -->
            <div class="seconds"></div>
            <!--
    -->
            <div class="twelvehr"></div>
        </div>
    </nav>
</div>