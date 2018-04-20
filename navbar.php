
<div class="container-fluid"> 
<!--Navbar-->
<nav class="navbar navbar-fixed navbar-light warning-color col-md-12" style="position:absolute;top:0;">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">ETARS</a>
     <div class="pull-right">
 <ul class="nav navbar-nav">
            
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="fa fa-user"></span>&nbsp;  Hi' <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="fa fa-user"></span>&nbsp;&nbsp;View Profile</a></li>
                <li><a href="logout.php"><span class="fa fa-sign-out-alt"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        
    </div>
   

<div class="row clock">
      <div class="hours"></div><!--
   --><div class="minutes"></div><!--
    --><div class="seconds"></div><!--
    --><div class="twelvehr"></div>
</div>
</nav>
</div>