
<div class="container-fluid"> 
<!--Navbar-->
<nav class="navbar navbar-fixed navbar-light primary-color col-md-12" style="position:absolute;">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">ETARS</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
     
 <ul class="nav navbar-nav" style="float:right;">
            
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
    <!-- Collapsible content -->

<div class="row clock">
      <div class="hours"></div><!--
   --><div class="minutes"></div><!--
    --><div class="seconds"></div><!--
    --><div class="twelvehr"></div>
</div>
</nav>
</div>