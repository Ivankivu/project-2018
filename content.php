<div class="container-fluid" style="height: 87%; background-color: dimgrey;overflow:hidden;">
        <!-- header ends-->

        <!--dynamic tabs begin-->
        <div class="row" style="position: relative;top:40px;">
            <div class="col-md-1">
                <!-- Nav pills-->
                <ul class="nav md-pills pills-primary flex-column icon-bar" role="tablist">
                    <li role="presentation" class="nav-item icon-bar">
                        <a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="pill">
                            <i class="fas fa-user" aria-hidden="true" style="font-size:40px;align-items:center;padding-top:20px;"></i>
                        </a>
                    </li>
                    <li role="presentation" class="nav-item" >
                        <a class="nav-link" href="#menu1" aria-controls="menu1" role="tab" data-toggle="pill">
                            <i class="fa fa-cogs ml-2" style="font-size:40px;align-items:center;padding-top:20px;"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="#menu2" aria-controls="menu2" role="tab" data-toggle="pill">
                            <i class="fa fa-download ml-2" style="font-size:40px;align-items:center;padding-top:20px;"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="" aria-controls="menu2" role="tab" data-toggle="pill">
                            <i class="fa fa-download ml-2" style="font-size:40px;align-items:center;padding-top:20px;"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="" aria-controls="menu2" role="tab" data-toggle="pill">
                            <i class="fa fa-download ml-2" style="font-size:40px;align-items:center;padding-top:20px;"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="" aria-controls="menu2" role="tab" data-toggle="pill">
                            <i class="fa fa-download ml-2" style="font-size:40px;align-items:center;padding-top:20px;"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <!-- tab content -->
                <div class="tab-content vertical">

                    <!--tab 1-->
                    <div id="home" class="tab-pane fade in show active" role="tabpanel">
                        <div class="card" style="margin-bottom:10px;">
                            <!-- table -->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Available Units</h5>
                                <div class="panel-body" style="height: 200px;overflow: auto;">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead class="blue-grey lighten-3">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Unit name</th>
                                                <th class="text-center">View profile</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

            		$query = "SELECT * FROM tbl_units";
            		$stmt = $db_con->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
						<tr>
						<td class="text-center"><?php echo $row["user_id"]; ?></td>
						<td class="text-center"><?php echo $row["first_name"]."&nbsp;".$row["last_name"]; ?></td>
						<td>
						<button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row["user_id"]; ?>" id="getUser" class="btn btn-sm btn-info"><i class="fas fa-eye" style="align-items:center;"></i> View</button>
						</td>
						</tr>
						<?php
					}
            		?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table ends -->
                            
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <i class="fa fa-user"></i> Unit Profile
                </h4> 
            </div>
            <div class="modal-body">

                <div id="modal-loader" style="display: none; text-align: center;">
                    <img src="ajax-loader.gif">
                </div>

                <!-- content will be load here -->
                <div id="dynamic-content"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
                       <!-- /.modal -->    
                        </div>

                        <!-- buttons-->
                        <div class=" row " style="margin-top:15px;margin-bottom:5px;padding-right:20px;padding-bottom:5px;">
                            <div class=" col-md-12 " style="border-radius:5px; ">
                                <button type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal" style="margin-left:60px;">New Event</button>
                                <button type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal2">Edit Event</button>
                                <button type="submit" class="btn btn-default">New Unit</button>
                            </div>
                        </div>
                        <!-- buttons end-->

                        <div class="card" style="margin-bottom:0px;">
                            <!--table-->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Active Calls</h5>
                                <div class="panel-body" style="height:250px;overflow: auto;">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead class="blue-grey lighten-3">
                                            <tr>
                                                <th>#</th>
                                                <th>Location</th>
                                                <th>Duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--tab 2-->
                    <div id="menu1" class="tab-pane fade" role="tabpanel">
                        <div class="card" >
                            <!-- table -->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Available Units</h5>
                                <div class="panel-body" style="height: 550px;overflow: auto;">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Incident</th>
                                                <th>operator</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table ends -->
                        </div>
                    </div>

                    <!--tab 3-->
                      <div id="menu2" class="tab-pane fade" role="tabpanel">
                        <div class="card" style="margin-bottom:10px;">
                            <!-- table -->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Available Units</h5>
                                <div class="panel-body" style="height: 200px;overflow: auto;">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead class="blue-grey lighten-3">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Unit name</th>
                                                <th class="text-center">View profile</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table ends -->
                             
                        </div>

                        <!-- buttons-->
                        <div class=" row " style="margin-top:15px;margin-bottom:5px;padding-right:20px;padding-bottom:5px;">
                            <div class=" col-md-12 " style="border-radius:5px; ">
                                <button type="button" class="btn btn-default " data-toggle="modal" data-target="#" style="margin-left:60px;">New Event</button>
                                <button type="button" class="btn btn-default " data-toggle="modal" data-target="#">Edit Event</button>
                                <button type="submit" class="btn btn-default">New Unit</button>
                            </div>
                        </div>
                        <!-- buttons end-->

                        <div class="card" style="margin-bottom:0px;">
                            <!--table-->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Active Calls</h5>
                                <div class="panel-body" style="height:250px;overflow: auto;">
                                    <table class="table table-sm table-bordered table-hover">
                                        <thead class="blue-grey lighten-3">
                                            <tr>
                                                <th>#</th>
                                                <th>Location</th>
                                                <th>Duration</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- tabs end -->

            <!-- side map-->
            <div class="col-md-5" style="padding-right:30px">
                <!--Card-->
                <!--map-->
                <div class="card card-cascade narrower " style="margin-top:0;">
                    <!--Card content-->
                    <div class="card-body text-center ">

                        <!--Google map-->
                        <div id="map" class="z-depth-1 " style="height: 265px;background-color: aquamarine; border-radius:5px;"></div>

                    </div>
                    <!--/.Card content-->
                </div>


                <!--/.Card-->
                <div class="row">
                    <!--VOIP Dail-->
                    <div class="col-md-12 text-center" style="float:right;top:15px;">
                        <div class="card panel-default" style="height:275px;">
                            <div class="row card-body">
                               <div class="container">
        <div class="clearfix"></div>

        <div class="frame small" style="display: block;">
            <div class="inner loginBox">
                <h3 id="login">Sign in</h3>
                <form class="md-form" id="userForm" style="display: inline;">
                
                    <input type="text" id="username" placeholder="USERNAME" ><br><br>
                    <input id="password" type="password" placeholder="PASSWORD"><br><br>
                    <button id="loginUser">Login</button>
                    <button id="createUser">Create</button>
                </form>
                <div id="userInfo">
                    <h3><span id="username"></span></h3>
                    <button id="logOut">Logout</button>
                </div>
            </div>


        </div>

        <div class="frame" style="display: block;">
            <h3>Web Call</h3>
            <div id="call">
                <form id="newCall">
                    <input id="callUserName" placeholder="Username (alice)"><br>
                    <div id="webcallbtn" class="col-sm-12">
                    <button id="call">Call</button>
                    <button id="hangup">Hangup</button>
                    <button id="answer">Answer</button>
                    </div>
                    <audio id="incoming" autoplay=""></audio>
                    <audio id="ringback" src="style/ringback.wav" loop=""></audio>
                    <audio id="ringtone" src="style/phone_ring.wav" loop=""></audio>
                </form>
            </div>
            <div class="clearfix"></div>
            <div id="callLog">
            </div>
            <div class="error">
            </div>
        </div>
    </div>
                           <script src="js/WEBsample.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side map ends-->

        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header primary-color white-text">
                        <h4 class="title text-center"><i class="fa fa-pencil prefix"></i>Add new Event</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body" style="padding:20px 30px 0 30px;">
                        <div class="panel panel-default">

                            <!-- Extended material form grid -->
                            <form>
                                <!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group"><label for="received" style="margin-top:-30px;">Recieved</label>
                                            <input type="date" class="form-control datepicker" id="received">

                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="email" class="form-control" id="inputEmail4MD">
                                            <label for="inputEmail4MD">Control Number</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="email" class="form-control" id="email">
                                            <label for="email">Entered By</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col-md-12">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="address">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="area">
                                            <label for="area">Area</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="suite">
                                            <label for="suite">Suite</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <select id="select" class="md-select form-control colorful-select dropdown-primary mx-2" style="margin-top:20px;">
                                                <option value="" disabled selected>Select Incident</option>
                                                <option>Suspicious Person</option>
                                                <option>Intoxicated Person</option>
                                                <option>Missing Person</option>
                                                <option>Disburbed Person</option>
                                                <option>Disturbance</option>
                                                <option>Loud Noise</option>
                                                <option>Fight</option>
                                                <option>Stabbing</option>
                                                <option>Shooting</option>
                                                <option>Homicide</option>
                                                <option>Suicide</option>
                                                <option>Dead Body</option>
                                                <option>Burglary, Home</option>
                                                <option>Burglary, Business</option>
                                                <option>Alarm, Home</option>
                                                <option>Alarm, Business</option>
                                                <option>Alarm, Bank</option>
                                                <option>Robbery, Person</option>
                                                <option>Robbery, Business</option>
                                                <option>Robbery, Bank</option>
                                                <option>Stolen Vehicle</option>
                                                <option>Abandoned Vehicle</option>
                                                <option>Traffic Accident</option>
                                                <option>DUI</option>
                                                <option>Hit & Run</option>
                                                <option>Other Traffic Inv.</option>
                                                <option>Rape</option>
                                                <option>Other Sexual Offense</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <textarea class="md-textarea md-textarea-auto form-control" id="info"  rows="1"></textarea>
                                            <label for="info">Additional Info</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <textarea class="md-textarea md-textarea-auto  form-control" id="notes" rows="1"></textarea>
                                            <label for="notes">Incident Notes</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>


                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="complaint">
                                            <label for="complaint">Complainant</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->


                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <select id="loc" class="md-select form-control colorful-select dropdown-primary mx-1">
                            <option value="" disabled selected>Choose Location</option>
                             <option>Kampala</option>
                            <option>Makindye</option>
                            <option>Kabalagala</option>
                            <option>Kansanga</option>
                            <option>Bunga</option>
                            <option>Munyonyo</option>
                            <option>Ggaba</option>
                            <option>Nsambya</option>
                            <option>Muyenga</option>
            </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="unit">
                                            <label for="unit">Unit Assigned</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <div class="form-row">


                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="date" class="form-control datepicker" id="dispatched">
                                            <label for="dispatched" style="margin-top:-30px;">Dispatched</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->


                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="date" class="form-control datepicker" id="arrived">
                                            <label for="arrived" style="margin-top:-30px;">Arrived</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>

                            </form>
                            <!-- Extended material form grid -->
                        </div>
                    </div>


                    <!-- form ends -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-md" data-dismiss="modal">Save</button>
                    </div>

                </div>

            </div>
        </div>

        <!-- Modal2 -->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header warning-color white-text">
                        <h4 class="modal-title text-center"><i class="fa fa-pencil prefix"></i>Edit Event</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-default" style="padding:20px 30px 0 30px;">
                            <!-- Extended material form grid -->
                            <form>
                                <!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group"><label for="received" style="margin-top:-30px;">Recieved</label>
                                            <input type="date" class="form-control datepicker" id="received">

                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="email" class="form-control" id="inputEmail4MD">
                                            <label for="inputEmail4MD">Control Number</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="email" class="form-control" id="email">
                                            <label for="email">Entered By</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col-md-12">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="address">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="area">
                                            <label for="area">Area</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="suite">
                                            <label for="suite">Suite</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <select id="select" class="md-select form-control colorful-select dropdown-primary mx-2" style="margin-top:20px;">
                                                <option value="" disabled selected>Select Incident</option>
                                                <option>Suspicious Person</option>
                                                <option>Intoxicated Person</option>
                                                <option>Missing Person</option>
                                                <option>Disburbed Person</option>
                                                <option>Disturbance</option>
                                                <option>Loud Noise</option>
                                                <option>Fight</option>
                                                <option>Stabbing</option>
                                                <option>Shooting</option>
                                                <option>Homicide</option>
                                                <option>Suicide</option>
                                                <option>Dead Body</option>
                                                <option>Burglary, Home</option>
                                                <option>Burglary, Business</option>
                                                <option>Alarm, Home</option>
                                                <option>Alarm, Business</option>
                                                <option>Alarm, Bank</option>
                                                <option>Robbery, Person</option>
                                                <option>Robbery, Business</option>
                                                <option>Robbery, Bank</option>
                                                <option>Stolen Vehicle</option>
                                                <option>Abandoned Vehicle</option>
                                                <option>Traffic Accident</option>
                                                <option>DUI</option>
                                                <option>Hit & Run</option>
                                                                <option>Other Traffic Inv.</option>
                                                <option>Rape</option>
                                                <option>Other Sexual Offense</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Grid column--->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <textarea class="md-textarea md-textarea-auto form-control" id="info"  rows="1"></textarea>
                                            <label for="info">Additional Info</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <textarea class="md-textarea md-textarea-auto  form-control" id="notes" rows="1"></textarea>
                                            <label for="notes">Incident Notes</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>


                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="complaint">
                                            <label for="complaint">Complainant</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->


                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <select id="loc" class="md-select form-control colorful-select dropdown-primary mx-1">
                            <option value="" disabled selected>Choose Location</option>
                             <option>Kampala</option>
                            <option>Makindye</option>
                            <option>Kabalagala</option>
                            <option>Kansanga</option>
                            <option>Bunga</option>
                            <option>Munyonyo</option>
                            <option>Ggaba</option>
                            <option>Nsambya</option>
                            <option>Muyenga</option>
            </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="text" class="form-control" id="unit">
                                            <label for="unit">Unit Assigned</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <div class="form-row">


                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="date" class="form-control datepicker" id="dispatched">
                                            <label for="dispatched" style="margin-top:-30px;">Dispatched</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->


                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <input type="date" class="form-control datepicker" id="arrived">
                                            <label for="arrived" style="margin-top:-30px;">Arrived</label>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                </div>

                            </form>
                            <!-- Extended material form grid -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal2 ends -->
       
    </div>
   
        <div class="container-fluid">
               <div class="card col-md-12" style="position:relative;background-color:yellow;width:100%;">
                            <!-- table -->
                            <div class="panel panel-default">
                                <h5 class="text-center" style="font-size:25px;">Available Units</h5>
                                <div class="panel-body" style="height: 100%;overflow: auto;">
                                
                                </div>
                   </div>
            </div>
            
        </div> 
   
<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'getunit.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
	});
	
});

</script>