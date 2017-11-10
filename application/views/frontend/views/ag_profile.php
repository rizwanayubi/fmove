
  <!-- Page Banner Start-->
  <section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">Agent Profile</h1>
          <ol class="breadcrumb text-center ">
            <li><a href="#">Home</a></li>
            <li><a href="#">Agent</a></li>
            <li class="active">Agent Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Banner End -->
  <!-- <?php if (isset($curr_login)){ ?>
    <div class="container-fluid">
        <div class="row" style="margin-top: 25px">
            <div class="col-md-12">
            <div align="center">
                <?php $this->load->view('frontend/layouts/usernav.php', $_view);?>
            </div>
            </div>
        </div>  
    </div>
  <?php } ?> -->
  <!-- User Profile -->
  <section id="agents" class="padding_bottom_half padding_top">
    <div class="container-fluid">

      <div class="col-md-2 col-xs-12">
        <div class="listing1">
          <div class="bottom40">

            <div class="agent_wrap">
              <div class="image user_img">
                <img class="img-responsive" src="<?php echo base_url('resources/img/agents/' . $viewdata['agentdata']['image']);?>" alt="User">
              </div>
              <div class="usr_nam">
                <h3><?= $viewdata['agentdata']['fname']?> <?= $viewdata['agentdata']['lname']?></h3>
              </div>
              <!-- required for floating -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#home" data-toggle="tab">My Listings</a></li>
                <li><a href="#fav" data-toggle="tab">My Favourite</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Inquiries</a></li>
                <li><a href="#settings" data-toggle="tab">Inbox</a></li>
                <!--<li><a href="#sub_property" data-toggle="tab">Submit Property</a></li>-->
              </ul>

            </div>

          </div>
        </div>

      </div>
      <div class="col-md-10 col-xs-12">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <!-- Content -->
            <div id="deals" class="bottom40">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="alert alert-info" role="alert">
                        <div class="pull-left">
                            <h3>My Property List</h3>
                        </div>
                        <div class="pull-right">
                            <a href="ag_submit" class="btn btn-sm btn-default">Submit Property</a>
                        </div>
                    <div class="clearfix"></div>
                  </div>
                  </div>
                <div class="col-sm-12">
 
                   <?php foreach($viewdata['my_prop'] as $property) {  ?>
    
      <div class="row" style="margin-top:50px;margin-bottom:50px;">
        <div class="col-sm-10">      
         
            <div class="item">
              <div class="media <?php 
              if ($property['is_feat'] == "1")
              {
                echo "fea_dtls";
              }


              ?> deal_media proerty_content">
                <div class="media-left">
                  <a href="property_detail?id=<?php echo $property['prop_id']; ?>">

                  <img class="media-object" src="<?= $assets ?>img/properties/<?php echo $property['prop_id']."/cover.jpg"?>" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <div  class="pull-right ">
              <?php 
              if ($property['is_feat'] == "1")
              {?>
                <img class="start_tag" src="<?= $assets ?>img/favruite.png" alt="property">
              <?php }


              ?>
                   
                  </div>
                  <div class="price <?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> default_clr">
                      
                    <h4>£ <?= $property['price']?> <? if($property['status'] == 'rent') echo "Per Month" ?> - <small><?php if ($property['is_feat'] == "1")
              {
                echo "Featured";
              }
              else if ($property['status'] == "sale")
              {
                echo "For Sale";
              }
              else if ($property['status'] == "rent")
              {
                echo "For Rent";
              }
               else if ($property['status'] == "salag" )
              {
                echo "Sale Agreed";
              }
              else if ($property['status'] == "rentag")
              {
                echo "Rent Agreed";
              }
              else if ($property['status'] == "sold")
              {
                echo "Sold";
              }
              else if ( $property['status'] == "rentd")
              {
                echo "Rented";
              }



              ?> </small></h4>
                  </div>
                  <div class="proprty_typ">
                    <div class="pro_ty">
                      <h4>Business</h4>
                    </div>
                  </div>
                  <div class="proerty_text pro_dtl">
                    <h3 class="bottom15"> <a href="property_detail?id=<?php echo $property['prop_id']; ?>"><?= $property['title'] ?></a></h3>
                    <p class="block-with-text">
                      <?= $property['description'] ?>
                    </p>
                  </div>
                  <div class="dealer clearfix"> 
                  
                    <i class="author"><img width="70" src="<?php echo base_url('resources/img/agents/' . $viewdata['agentdata']['image']);?>" alt="agency"></i>
                    <h4><?= $viewdata['agentdata']['fname']?> <?= $viewdata['agentdata']['lname']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $viewdata['agentdata']['phone']?></span> 
                      <a href="mailtoagentcontactform"><i class="icon-mail-envelope-closed3"></i></a> 
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $viewdata['agentdata']['fname']?> <?= $viewdata['agentdata']['lname']?></p>
                    <p class="pull-md-left"><?= $property['address']?> </small></p>
                    <ul class="pull-right">
                      <!-- <li><a href="javascript:void(0)" data-toggle="tooltip" title="Favourite"><i class="icon-like"></i></a></li> -->
                      <li><a href="javascript:void(0)" data-toggle="tooltip" title="Edit"><i class="icon-edit"></i></a></li>
                      <li><a href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="icon-trash"></i></a></li>
                    </ul>
                  </div>
                  <div class="<?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> property_meta"> 
                    <span><i class="icon-select-an-objecto-tool"></i><?= $property['prop_details']['area']?> sq ft</span>
                    <span><i class="icon-bed"></i><?= $property['prop_details']['bedrooms']?> Bedrooms</span> 
                    <span><i class="icon-safety-shower"></i><?= $property['prop_details']['bathrooms']?> Bedrooms</span> 
                    <span><i class="icon-old-television"></i><?= $property['prop_details']['lounge']?>TV Lounge</span> 
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
            <?php } ?>
                </div>
              </div>
            </div>


          </div>
          <div class="tab-pane" id="fav"></div>
          <div class="tab-pane" id="profile">
              
              <div class="col-sm-8 bottom40">
            <div class="agent_wrap">
                <div class=" bottom10">
                    <h3>
                        Agent Name
                        <!-- <?= $viewdata['agent']['fname'] ." ". $viewdata['agent']['lname'];?>  -->
                    </h3>
                </div>
                <div class="agnt_pro image">
                <!-- <img src="<?php echo base_url('resources/img/agents/'. $viewdata['agent']['image']); ?>" alt="Agents">  -->
                    <img class="pull-left img-thumbnail" src="http://media.rightmove.co.uk/142k/141935/branch_photo_141935_0000.jpeg" alt="Agents">
                    <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing. 
                        <!-- <?= $viewdata['agent']['description'];?>  -->
                    </p>
                </div>
                
            </div>
            </div>
        
      <div class="col-sm-4 bottom40 top30">
            <div class="agent_wrap">
              <table class="agent_contact agn_dtl table">
                  <tbody>
                    
                    <tr class="bottom10">
                      <td><strong>Username:</strong></td>
                      <td class="text-right">
                        <!-- <?= $viewdata['agent']['phone'];?>  -->
                       username2527
                      </td>
                    </tr>
                    <tr class="bottom10">
                      <td><strong>Email:</strong></td>
                      <td class="text-right">
                        <!-- <?= $viewdata['agent']['phone'];?>  -->
                        example@gmail.com
                      </td>
                    </tr>
                    <tr class="bottom10">
                      <td><strong>Phone:</strong></td>
                      <td class="text-right">
                          +44 90023 45678
                          <!-- <?= $viewdata['agent']['phone'];?> -->
                      </td>
                    </tr>
                    <tr>
                      <td class="adre"><strong>Address:</strong></td>
                      <td class="text-right">7-8 Regency Parade, Finchley Road, Hampstead, London, NW3 5EG</td>
                    </tr>
                  </tbody>
                </table>
                  
                <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                <ul class="social_share">
                  <li><a href="#" class="facebook"><i class="icon-facebook-1"></i></a></li>
                  <li><a href="#" class="twitter"><i class="icon-twitter-1"></i></a></li>
                  <li><a href="#" class="google"><i class="icon-google4"></i></a></li>
                  <li><a href="#" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" class="vimo"><i class="fa fa-instagram"></i></a></li>
                </ul>
                
            </div>
            <div class="col-md-12 top20 bottom10 text-center"><a class="btn btn-block btn-primary" data-toggle="modal"  href="#myModal">Edit Details</a></div>
          </div>
              <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Profile</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="col-md-4">
                                    <label for="name">
                                        <b>upload image:</b>
                                        </label>
                                        <div class="form-group">
                                          <input id="upload_image" type="file" class="dropify"  data-default-file="<?php echo base_url('resources/img/agents/' . $viewdata['agentdata']['image']);?>"  data-height="200" />
                                          <input  type="text" name="listing"  id="upload_image_sho" class="form-control" style="display:none;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                       <label for="name">
                                            <b>First Name:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                             <b>Last Name:</b>
                                         </label>
                                         <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Last Name" name="usr" value="">
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                        <label for="name">
                                             <b>User Name:</b>
                                         </label>
                                         <div class="form-group">
                                             <input type="text" class="form-control" placeholder="User Name" name="usr" value="">
                                         </div>
                                     </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                            <b>Email:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                            <b>Current password:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Current Password:" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                            <b>New password:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="New Password:" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                            <b>Confirm new password:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm New Password:" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">
                                            <b>Phone:</b>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Number" name="usr" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="fb_link" class="control-label">Facebook Link</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                <input placeholder="https://facebook.com/favmove" name="fb_link" value="" class="form-control" id="fb_link" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="linkedin_link" class="control-label">Linkedin Link</label>
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                                <input placeholder="https://linkedin.com/favmove" name="li_link" value="" class="form-control" id="linkedin_link" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="twit_link" class="control-label">Twitter Link</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                                <input placeholder="https://twitter.com/favmove" name="twit_link" value="" class="form-control" id="twit_link" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gplus_link" class="control-label">Google plus Link</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                                                <input placeholder="https://google.com/favmove" name="gplus_link" value="" class="form-control" id="gplus_link" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="youtube_link" class="control-label">Youtube Link</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-youtube" aria-hidden="true"></i></span>
                                                <input placeholder="https://youtube.com/favmove" name="youtubelink" value="" class="form-control" id="youtube_link" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">
                                            <b>Description:</b>
                                        </label>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" placeholder="Address" name="usr" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">
                                            <b>Address:</b>
                                        </label>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" placeholder="Address" name="usr" value=""></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
          
          <div class="tab-pane" id="messages">
            
              <div class="box box-primary">
              <div class="box-body box-profile">
                    <?php  
                    if(!empty($viewdata['my_inq'])){
                    foreach ($viewdata['my_inq'] as $inq) { ?>
                  <div class="col-md-6">

                      <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="pull-left">
                              <h4 class="box-title">
                                  User Inquiry
                              </h4>
                            </div>
                            <div class="pull-right">
                            <button type="button" class="btn btn-xs btn-danger">Delete</button>
                            </div>
                          <div class="clearfix"></div>
                        </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-12">
                                  
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Name:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['fullname'];
                                          
                                          
                                          ?>
                                          
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Option:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                          
                                              echo $inq['useroption'];
                                          
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Email:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                         <?php
                                              echo $inq['email'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Phone:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['phone'];
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>

                                  <div class="col-md-12">
                                      <h5 class="box-title">
                                          <b>Description</b>
                                      </h5>
                                      <p>
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['message'];
                                          
                                      
                                          ?>
                                      </span>
                                      </p>
                                  </div>
                              </div>
                            </div>
                          </div>


                          <div class="clearfix"></div>
                      </div>

                  </div>
                  <?php  }
                }
                else
                {
                  echo "<h2>No inquiry for you.</h2>";
                }
                    ?>
                  <!-- /.box-body -->
              </div>
              <!-- /.box -->
          </div>
       
            </div>
          
          <div class="tab-pane" id="settings">
            <?php  
            if(!empty($viewdata['my_inbox'])){
            foreach ($viewdata['my_inbox'] as $inq) { ?>
                  <div class="col-md-6">

                          <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="pull-left">
                                <h4 class="box-title">
                                    User Detail
                                </h4>
                                </div>
                                <div class="pull-right">
                            <button type="button" class="btn btn-xs btn-danger">Delete</button>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="panel-body">
                              <br>
                              <div class="col-md-12">
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Name:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                      <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['name'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>User Option:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                          
                                              echo $inq['phone'];
                                          
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Email:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                         <?php
                                              echo $inq['email'];
                                          
                                          
                                          ?>
                                      </span>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                      <span class="box-title">
                                          <b>Phone:</b>
                                      </span>
                                  </div>
                                  <div class="col-md-6">
                                  <span class="ag_inq">
                                          <?php 
                                         
                                              echo $inq['message'];
                                         
                                          ?>
                                      </span>
                                  </div>
                                  <br>

                                  
                              </div>
                          </div>


                          <div class="clearfix"></div>
                      </div>

                  </div>

        <?php  }
        }
        else
        {
          echo "<h2>No inbox for you.</h2>";
        }
            ?>

          </div>

          <div class="tab-pane" id="sub_property">
            <div id="deals" class="top10 bottom40">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="col-sm-1 col-md-1"></div>
                            <div class="col-sm-10 col-md-10">
                              <h3 class="text-uppercase bottom20">Add Your Property</h3>
                        
                              <?php
                        if($this->session->flashdata('successsub'))
                        {
                            echo "<br>
                            <div class='col-md-offset-3 col-md-6'>
                            <div  id='alert-pop' class='text-center alert alert-warning'>";
                            
                        echo $this->session->flashdata('successsub');
                          echo "</div> 
                          </div>";
                        
                            
                        
                        }
                        ?>
                        
                              <form class="callus clearfix border_radius submit_property" method="post" action="ag_submit" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-sm-6">
                        
                                    <div class="single-query form-group bottom20">
                                      <label>Title</label>
                                      <input type="text" name="title" class="keyword-input" placeholder="Enter your property title" >
                                      
                                    </div>
                                    <span class="text-warning">
                                                                <?php echo form_error('title');?>
                                                            </span>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="single-query bottom20">
                                      <label>Property Type </label>
                                      <div class="intro">
                                        <select name="prop_type">
                                          <option class="active">Select</option>
                                          <option value="bus">Business</option>
                                          <option value="com">Commercial</option>
                                          <option value="res">Residential</option>
                                        </select>
                                        <span class="text-warning">
                                                                <?php echo form_error('prop_type');?>
                                                            </span>
                                      </div>
                                    </div>
                                  </div>
                        
                                  
                                  <div class="col-sm-6">
                                    <div class="single-query bottom20">
                                      <label>Town</label>
                                      <div class="intro">
                                        <select name="town_id">
                                          <option value="">Select Town</option>
                                          <?php 
                                        foreach($defdata['all_uk_towns'] as $uk_town)
                                        {
                                          $selected = ($uk_town['postcode'] == $this->input->post('town_id')) ? ' selected="selected"' : "";
                        
                                          echo '<option value="'.$uk_town['postcode'].'" '.$selected.'>'.$uk_town['postcode'].','.$uk_town['town'].', '.$uk_town['region'].', '.$uk_town['uk_region'].'.</option>';
                                        } 
                                        ?>
                                        </select>
                                        <span class="text-warning">
                                                                <?php echo form_error('town_id');?>
                                                            </span>
                                      </div>
                                    </div>
                                  </div>
                        
                                  
                        
                                  <div class="col-sm-6">
                                    <div class="single-query bottom20">
                                      <label>Status </label>
                                      <div class="intro">
                                        <select name="status">
                                          <option class="active">Select</option>
                                          <option value="sale">For Sale</option>
                                          <option value="rent">For Rent </option>
                                        </select>
                                        <span class="text-warning">
                                                                <?php echo form_error('status');?>
                                                            </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="single-query form-group bottom20">
                                      <label>Price</label>
                                      <input type="number" name="price" min="0" step="0.01" class="keyword-input" placeholder="£ 45,000" value="40000">
                                      <span class="text-warning">
                                                                <?php echo form_error('price');?>
                                                            </span>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="single-query form-group bottom20">
                                      <label>Year Built</label>
                                      <input type="text" name="yearb" placeholder="Select Date" value="2010" class="has-datetimepicker form-control" />
                                      <span class="text-warning">
                                                                <?php echo form_error('yearb');?>
                                                            </span>
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                      <div class="single-query form-group bottom20">
                                        <label>Address</label>
                                        <textarea type="text" class="keyword-input" name="address" placeholder="Enter Property Address" style="width: 100%">Lahore, Pakistan</textarea>
                                        <span class="text-warning">
                                                                <?php echo form_error('address');?>
                                                            </span>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                  <div class="col-sm-12">
                                    <h3 class="margin40 bottom15">Property Photos
                                      <i class="fa fa-info-circle help" data-toggle="tooltip" title="add images to upload for property!"></i>
                                    </h3>
                        
                        
                        
                                    <!-- <div class="file_uploader bottom20">
                                <div id="upload-widget" name="files" class="dropzone">
                                <div class="dz-default dz-message">
                        <span> -->
                                    <div class="col-md-6">
                                      
                                      <i class="fa fa-plus-circle">&nbsp;&nbsp;Cover Image</i>
                                      <br>
                                      <br>
                                      <!-- <input type="file" multiple="multiple" name="listing" id="file">
                                      <label for="agent_image" class="control-label">Agent Image</label> -->
                                      <div class="form-group">
                                        <div class="input-group agncy_btn">
                                          <label class="input-group-btn">
                                            <span class="btn btn-primary">
                                              Upload Images&hellip; <input type="file" name="listing" id="upload_image" style="display: none;" />
                                            </span>
                                          </label>
                                          <input  type="text" name="listing"  id="upload_image_sho" class="form-control" readonly>
                                        </div>
                                        <span class="text-warning">
                                                                <?php echo form_error('listing');?>
                                                            </span>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <i class="fa fa-plus-circle">&nbsp;&nbsp;Detailed Images</i>
                                      <br>
                                      <br>
                                      <div class="form-group">
                                          <div class="input-group agncy_btn">
                                            <label class="input-group-btn">
                                              <span class="btn btn-primary">
                                                Upload Image&hellip; <input type="file" multiple="multiple" name="pic[]" id="upload_mlt_images" style="display: none;" />
                                              </span>
                                            </label>
                                            <input  type="text" name="pic[]"  id="sho_mlt_images" class="form-control"  id="file" readonly>
                                            <span class="text-warning">
                                                                <?php echo form_error('pic[]');?>
                                                            </span>
                                          </div>
                                         
                                        </div>
                                      <!-- <input type="file" multiple="multiple" name="pic[]" id="file"> -->
                                    </div>
                        
                                    <!-- </span>
                        </div>
                                </div>
                              </div>-->
                              </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <h3 class="bottom15 margin40">Property Details</h3>
                                    </div>
                                  </div>
                        
                                  <div class="row">
                        
                                    <div class="col-sm-6">
                        
                                      <div class="single-query form-group bottom20">
                                        <label>Area in Sq. Ft</label>
                                        <div class="intro">
                                          <input type="text" name="area" id="area" placeholder="5,543 sq ft." value="1">
                                          <span class="text-warning">
                                                                <?php echo form_error('area');?>
                                                            </span>
                                        </div>
                                      </div>
                        
                                    </div>
                                    <div class="col-sm-6">
                        
                                      <div class="single-query form-group bottom20">
                                        <label>Bedrooms</label>
                                        <div class="intro">
                                          <select name="bedrooms">
                                            <option class="active">Number of Bedrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                        
                                          </select>
                                          <span class="text-warning">
                                                                <?php echo form_error('bedrooms');?>
                                                            </span>
                                        </div>
                                      </div>
                        
                                    </div>
                                    <div class="col-sm-6">
                        
                                      <div class="single-query  form-group bottom20">
                                        <label>Bathrooms</label>
                                        <div class="intro">
                                          <select name="bathrooms">
                                            <option class="active">Number of Bathrooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                          </select>
                                          <span class="text-warning">
                                                                <?php echo form_error('bathrooms');?>
                                                            </span>
                                        </div>
                                      </div>
                        
                                    </div>
                        
                        
                                    <div class="col-sm-6">
                        
                                      <div class="single-query form-group bottom20">
                                        <label>TV Lounge</label>
                                        <div class="intro">
                                          <select name="lounge">
                                            <option class="active">Number of TV Lounges</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                          </select>
                                          <span class="text-warning">
                                                                <?php echo form_error('lounge');?>
                                                            </span>
                                        </div>
                                      </div>
                        
                                    </div>
                                    <div class="col-sm-6">
                        
                                      <div class="single-query form-group  bottom20">
                                        <label>Garages</label>
                                        <div class="intro">
                                          <select name="garage">
                                            <option class="active">Number of Garages</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                          </select>
                                          <span class="text-warning">
                                                                <?php echo form_error('garage');?>
                                                            </span>
                                        </div>
                                      </div>
                        
                                    </div>
                                    
                                    <div class="col-sm-6 top30">
                                      <div class="top20">
                                        <div class="checkbox-inline">
                                          <label>
                                            <input type="checkbox" name="is_feat"> Featured
                                          </label>
                                        </div>
                                        <div class="checkbox-inline">
                                          <label>
                                            <input type="checkbox" name="new_build"> New Build
                                          </label>
                                        </div>
                                      </div>
                                      <!-- <div class="single-query form-group bottom20">
                                        <label>New Build</label>
                                        <div class="intro">
                                          <input type="checkbox" name="new_build">
                                        </div>
                                      </div> -->
                        
                                    </div>
                                    <div class="col-sm-12">
                                      <h3 class="bottom15 margin40">Property Description </h3>
                                      <textarea id="txtEditor" style="width: 100%" name="description">it's zameen.com property for sale </textarea>
                                    </div>
                                    <!--  <div class="col-sm-12">
                                <h3 class="bottom15 margin40">Quick Summary</h3>
                                <div class="table-responsive summery_table">
                                  <table class="table">
                                    <tr>
                                    <td>
                                    <i class="fa fa-bars titles"></i>
                                    </td>
                                    <td>
                                    <div class="single-query form-group">
                              <label>Title</label>
                                      <input type="text" class="keyword-input">
                                    </div>
                                    </td>
                                    <td>
                                    <div class="single-query form-group">
                              <label>Value</label>
                                      <input type="text" class="keyword-input">
                                    </div>
                                    </td>
                                    <td>
                                    <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                    </td>
                                    </tr>
                                 
                                  
                                    
                                  </table>
                                  <a href="#."  class="add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                              </div> -->
                                    <div class="col-sm-12">
                                      <h3 class="bottom15 margin40">Property Features</h3>
                                      <div class="search-propertie-filters">
                                        <div class="container-2">
                                          <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value="1" value="1" name="AC" />Air Conditioning</label>
                                              </div>
                                              <div class=" checkbox">
                                                  <label><input type="checkbox" value="1" name="Barbeque" />
                                                Barbeque Grill</label>
                                              </div>
                                              <div class=" checkbox">
                                                  <label><input type="checkbox" value="1" name="Basement" />
                                                Basement</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                              
                                              <div class=" checkbox">
                                                  <label><input type="checkbox" value="1" name="Lawn" />
                                                Lawn</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value="1" name="Balcony" />
                                                Balcony</label>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                              <!-- <div class="col-md-4 col-sm-4">
                                                  <div class=" checkbox">
                                                      <input type="checkbox" value="1" name="Swimming Pool" />
                                                      <span>Swimming Pool</span>
                                                  </div>
                                              </div> -->
                                              <div class=" checkbox">
                                                  <label><input type="checkbox" value="1" name="Laundry" />
                                                Laundry Room</label>
                                              </div>
                                            
                                              <div class=" checkbox">
                                                  <label><input type="checkbox" value="1" name="Home_Theater" />
                                                Home Theater</label>
                                              </div>
                                            </div>
                                            <!--  <div class="col-md-4 col-sm-4">
                                                  <div class=" checkbox">
                                                      <input type="checkbox" name="Smoking allowed" />
                                                      <span>Smoking allowed</span>
                                                  </div>
                                              </div> -->
                                            <!--  <div class="col-md-4 col-sm-4">
                                                  <div class=" checkbox">
                                                      <input type="checkbox" name="Cable TV" />
                                                      <span>Cable TV</span>
                                                  </div>
                                              </div> -->
                                            <!--  <div class="col-md-4 col-sm-4">
                                                  <div class=" checkbox">
                                                      <input type="checkbox" name="Window Coverings" />
                                                      <span>Window Coverings</span>
                                                  </div>
                                              </div> -->
                                          </div>
                        
                                        </div>
                                      </div>
                        
                        
                                      <div class="col-sm-12">
                                        <h3 class="bottom15 margin40">Video Presentation</h3>
                                        <div class="single-query form-group bottom15">
                                          <label>Vimeo or Youtube URL</label>
                                          <input type="text" class="keyword-input" placeholder="https://vimeo.com">
                                        </div>
                                      </div>
                                      <!-- <div class="col-sm-12">
                                <h3 class="bottom15 margin40">Place on Map</h3>
                                <div class="single-query form-group bottom15">
                              <label>Property Address</label>
                                      <input type="text" class="keyword-input" placeholder="Enter a Location">
                                    </div>
                                    <div id="single_map"></div>
                              </div> -->
                                      <div class="col-md-4">
                                        <button type="submit" class="btn-blue border_radius margin40">submit property</button>
                                      </div>
                        
                                    </div>
                        
                        
                        
                        
                        
                        
                        
                        
                              </form>
                        
                        
                              </div>
                              <div class="col-sm-1 col-md-1"></div>
                        
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="clearfix"></div>

    </div>
  </section>
  <!-- User Profile End -->
