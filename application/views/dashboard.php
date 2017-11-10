<div class="row">
    <!-- <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Please navigate to the appropriate controller / action to open the associated function with your generated code.
                </h3>
            </div>
        </div>
    </div> -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo $allproperties; ?></h3>

                <p>Properties</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="property/index" class="small-box-footer">More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $allusers; ?>
                    
                </h3>

                <p>Active Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="user/index" class="small-box-footer">More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $totalagents; ?></h3>

                <p>Active Agents</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="agent/index" class="small-box-footer">More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo $allpackages; ?></h3>

                <p>Packages</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="package/index" class="small-box-footer">More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-md-7">
        <!-- USERS LIST -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Agents</h3>

                <div class="box-tools pull-right">
                    <span class="label label-danger">
                        <?php echo count($allagents);?> 
                        New Members
                    </span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body no-padding">
                <ul class="users-list clearfix">
<?php 
            //$allagents = $this->session->userdata($allagents);
            //var_dump($allagents); die();
            foreach($allagents as $agent):?>
                    <li>
                        <img class="img-responsive" src="<?php echo base_url('resources/img/agents/' . $agent['image']);?>" alt="User Image">
                        <a class="users-list-name" href="#"><?php echo $agent['fname']." ". $agent['lname'];?></a>
                        <span class="users-list-date">Today</span>
                    </li>
                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Norman</a>-->
                    <!--    <span class="users-list-date">Yesterday</span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Jane</a>-->
                    <!--    <span class="users-list-date">12 Jan</span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">John</a>-->
                    <!--    <span class="users-list-date">12 Jan</span>-->
                    <!--</li>-->

                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Sarah</a>-->
                    <!--    <span class="users-list-date">14 Jan</span>-->
                    <!--</li>-->

                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Alexander</a>-->
                    <!--    <span class="users-list-date">13 Jan</span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Nora</a>-->
                    <!--    <span class="users-list-date">15 Jan</span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <img src="http://localhost/favmove1/resources/img/user.png" alt="User Image">-->
                    <!--    <a class="users-list-name" href="#">Nadia</a>-->
                    <!--    <span class="users-list-date">15 Jan</span>-->
                    <!--</li>-->
                    <?php endforeach; ?>
                </ul>
                <!-- /.users-list -->
            </div>
            
            <!-- /.box-body -->
            <!-- <div class="box-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Users</a>
            </div> -->
            <!-- /.box-footer -->
        </div>
        <!--/.box -->
    </div>
    
    <div class="col-md-5">
        <!-- quick email widget -->
        <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
     
                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div>
                <div class="box-footer clearfix">
                  <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>
    </div>

</div>