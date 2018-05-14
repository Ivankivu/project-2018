<div class="container-fluid" style="height: 100%; background-color: dimgrey;overflow:hidden;">
    <!-- header ends-->

    <div class="row" style="position: relative;top:40px;">

        <div class="col-md-1 ml-2 mb-2" >
            <!-- Nav pills-->
            <ul class="nav md-pills pills-primary flex-column icon-bar" role="tablist">
                <li role="presentation" class="nav-item icon-bar">
                    <a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="pill">
                        <i class="fas fa-users ml-2" aria-hidden="true" style="font-size:30px;"></i>
                        <span class="ml-1" style="font-size:20px;">Users</span>
                    </a>
                </li>
                <li role="presentation" class="nav-item" style="margin-top:40px;">
                    <a class="nav-link" href="#menu2" aria-controls="menu2" role="tab" data-toggle="pill">
                        <i class="fa fa-chart-bar ml-2" style="font-size:30px;"></i>
                        <span  style="font-size:20px;">statistics</span>
                    </a>
                </li>
                <li role="presentation" class="nav-item" style="margin-top:40px;">
                    <a class="nav-link" href="#menu3" aria-controls="menu3" role="tab" data-toggle="pill">
                        <i class="fa fa-cogs ml-2" style="font-size:30px;"></i>
                        <span  style="font-size:20px;">Manage</span>
                    </a>
                </li>
                <li role="presentation" class="nav-item" style="margin-top:40px;">
                    <a class="nav-link" href="logout.php" aria-controls="logout.php">
                        <i class="fa fa-power-off ml-2" style="font-size:30px;"></i>
                        <span  class="ml-1" style="font-size:20px;">logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-7 ml-0">
            <!-- tab content -->
            <div class="tab-content vertical">

                <!--tab 1-->
                <div id="home" class="tab-pane fade in show active" role="tabpanel">
                    <div class="card" style="margin-bottom:10px;overflow:none;">
                        <!-- table -->
                        <div class="card panel-default">
                        <div class="card-header">
                        <i class="fa fa-user"></i>&nbsp;
                        Add new Users
                            </div>
                            <div class="card-body" style="height: 590px;overflow: auto;">
                            <form class="md-form form-signin form-control-lg " method="post" id="register-form" style="border:none;">
                                <!-- error will be showen here -->
                                <div id="error"></div>

                                <div class="row">
                                    <div class="col-sx-6 col-md-6 md-form form-group">
                                        <input type="text" class="md-form form-control" placeholder="First Name" name="first_name" id="first_name" />
                                    </div>

                                    <div class="col-sx-6 col-md-6 md-form form-group">
                                        <input type="text" class="md-form form-control" placeholder="Last Name" name="last_name" id="last_name" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sx-12 col-md-12 md-form form-group">
                                    <input type="email" class="md-form form-control" placeholder="Email address" name="user_email" id="user_email" />
                                        <span id="check-e"></span>
                                        
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-sx-6 col-md-6 md-form form-group">
                                    <input type="text" class="md-form form-control" placeholder="Username" name="user_name" id="user_name" />
                                    </div>

                                    <div class="col-sx-6 col-md-6 md-form form-group">
                                        <select name="user_role" class="mdb-select colorful-select dropdown-primary" id="user_role" style="width:300px;margin-top:15px;border:none;">
                                            <option name="-1" value="-1" disabled selected>select role</option>
                                            <option name="administrator" value="administrator">Administrator</option>
                                            <option name="agent" value="agent">Agent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sx-6 col-md-6 md-form form-group">
                                        <input type="password" class="md-form form-control" placeholder="Password" name="password" id="password" />
                                    </div>

                                    <div class="col-sx-6 col-md-6 md-form form-group">
                                        <input type="password" class="md-form form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                                    </div>
                                </div>

                                <div class="col-sx-6 col-md-6 md-form form-group">
                                    <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Add User
                                    </button>
                                </div>

                            </form>


                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>

                <!--tab 2-->
                <div id="menu2" class="tab-pane fade" role="tabpanel">
                    <div class="card" style="margin-bottom:10px;">
                        <div class="card panel-default">
                            <div class="card-header">
                            <i class="fa fa-chart-bar"></i>&nbsp;
                            statistics
                            </div>
                                <div class="card-body" style="height:590px;overflow: auto;">


                                </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                </div>

                <!--tab 3-->
                <div id="menu3" class="tab-pane fade" role="tabpanel">
                                    <div class="card" style="margin-bottom:10px;">
                                        <div class="card panel-default">
                                            <div class="card-header">
                                            <i class="fa fa-cogs"></i>&nbsp;
                                            Manage
                                            </div>
                                            <div class="card-body" style="height:590px;overflow: auto;">


                                            </div>
                                        </div>
                                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                    </div>
                                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="card" style="width:435px;">
                <!-- table -->
                <div class="card panel-default">
                <div class="card-header">
                        <i class="fa fa-table"></i>&nbsp;&nbsp;All Employees
                            </div>
                    <div class="card-body" style="height:590px;overflow: auto;">
                    <table class="table table-sm table-bordered table-condensed table-hover">
                                    <thead class="blue-grey lighten-3">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Full Names</th>
                                            <th class="text-center">View profile</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php

                                            $query = "SELECT * FROM tbl_users";
                                            $stmt = $db_con->prepare( $query );
                                            $stmt->execute();
                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                ?>
                                                <tr>
                                                <td class="text-center"><?php echo $row["user_id"]; ?></td>
                                                <td class="text-center"><?php echo $row["first_name"]; ?>&nbsp;<?php echo $row["last_name"]; ?></td>
                                                <td>
                                                <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row["user_id"]; ?>" id="getUser" class="btn btn-sm btn-info"><i class="fas fa-eye" style="align-items:center;"></i> View</button>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>

                        <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header text-center">
                                        <h4 class="modal-title h4-responsive">
                                            <i class="fa fa-user"></i> Unit Profile
                                        </h4>
                                    </div>
                                    <div class="modal-body">

                                        <div id="modal-loader" style="display: none; text-align: center;">
                                            <img src="ajax-loader.gif">
                                        </div>

                                        <!-- content will be load here -->
                                        <div id="dynamic-content">
                                        
                                        
                                        
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                <!-- table ends -->
            </div>
        </div>
    </div>
</div>
