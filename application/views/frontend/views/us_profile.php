
   
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
    <section id="agents" class="padding_bottom_half padding_top">
        <div class="container-fluid">


            <div class="col-md-2 col-xs-12">
                <div class="col-md-12 col-xs-12">
                    <div class="agent_wrap">
                        <div class="image user_img">
                            <img class="img-responsive" src="<?php echo base_url('resources/img/user.png')?>" alt="User">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="listing1">
                        <div class="bottom40">

                            <div class="agent_wrap">

                                <div class="usr_nam">
                                    <h3></h3>
                                </div>
                                <!-- required for floating -->
                                <!-- Nav tabs -->

                                <?php $userid = $this->session->userdata['userData']['userData']['dataa']['userid']; ?> 

                                <ul class="nav nav-tabs usr_sdbar tabs-left">
                                    
                                    <li>
                                        <a href="usfav?id=<?php echo $userid; ?>" data-target="#home" data-toggle="tab">My Favourite</a>

                                    </li>
                                    <li>
                                        <a href="usfav?id=<?php echo $userid; ?>" data-target="#pro" data-toggle="tab">My Listing</a>

                                    </li>
                                    
                                    <!-- <li>
                                        <a href="#messages" data-toggle="tab">Inbox</a>
                                    </li> -->
                                    <li>
                                        <a href="#invsmnt" data-toggle="tab">Invesment Details</a>
                                    </li>
                                    <li>
                                        <a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#submit_pro" data-toggle="tab">Submit Property</a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

           


            <div class="col-md-10 col-xs-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <div id="deals" class="top30 bottom40">
                            <div class="row">
        
      <div class="col-sm-6 bottom40 top30">
            <div class="agent_wrap">
                    <div class="panel panel-info">
                            <div class="panel-heading">
                            <div class="pull-left">
                                <h4>User Details</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-xs btn-primary" data-toggle="modal"  href="#myModal">Edit Details</a>
                                
                            </div>
                          <div class="clearfix"></div>
                        </div>
                    </div>

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
                
            </div>
           
          </div>
              <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <form action="imag_name.php" method="POST">
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
                                          <input id="upload_image" type="file" class="dropify"  data-default-file="<?php echo base_url('resources/img/user.png')?>"  data-height="150" />
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
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" id="sb_fm">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                    </div>
                </div>

                                <div class=" col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#Cntct_dtl">
                                                <b>Update contact details:</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#chng_paswrd">Change your password</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#chng_email">Change your email</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class=" col-md-12">
                                        <form action="updateuser?id=<?php echo $this->session->userdata['userData']['userData']['dataa']['userid'];?>" method="POST">
                                                <div class="tab-content">

                                            <div id="Cntct_dtl" class="tab-pane fade in active">
                                                <div class="top30 col-md-6 col-sm-6 rad_btns">
                                                    <div class="row">

                                                       
                                                        <div class="clearfix"></div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="ag_name">
                                                                <label for="name">
                                                                    <b>User Name:</b>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="User Name" name="usr" value="<?php echo  $this->session->userdata['userData']['userData']['dataa']['username'];?>">
                                                            </div>
                                                            
                                                            
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="ag_name">
                                                                <label for="email">
                                                                    <b>Email: </b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Email" name="email" class="form-control" value="<?php echo  $this->session->userdata['userData']['userData']['dataa']['email'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                                </div>
                                            </div>
                                      
                                        
                                            <div id="chng_paswrd" class="tab-pane fade">
                                                    <?php
                                                    if($this->session->flashdata('successsub'))
                                                    {
                                                        echo "<br>
                                                        <div class='col-md-offset-3 col-md-6'>
                                                        <div  id='alert-pop' class='text-center alert alert-danger'>";
                                                        
                                                    echo $this->session->flashdata('successsub');
                                                      echo "</div> 
                                                      </div>";
                                                    echo "<script>
                                                        window.location.hash = '#alert-pop';
                                                        
                                                    </script>";
                                                    }
                                                    ?>
                                                <div class="col-md-6 col-sm-6 rad_btns">
                                                        <form action="userpass_update?id=<?php echo $userid;?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="ag_name">
                                                                <label for="password">
                                                                    <b>Current password:</b>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Current password" id="usr" name="oldpass">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="ag_name">
                                                                <label for="password">
                                                                    <b>New password: </b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="password" placeholder="New Password" class="form-control" name="newpass">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="ag_name">
                                                                <label for="password">
                                                                    <b>Confirm new password: </b>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="password" placeholder="Confirm New Password" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                                </div>
                                            </div>
                                        
                                        <div id="chng_email" class="tab-pane fade">
                                            <div class="col-md-6 col-sm-6 rad_btns">
                                                <div class="row">
                                                    <div class="top30">
                                                        <div class=" col-md-4">
                                                            <label>
                                                                <b>Current email:</b>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label>
                                                               <p><?php echo  $this->session->userdata['userData']['userData']['dataa']['email'];?></p>
                                                            </label>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="ag_name">
                                                            <label for="email">
                                                                <b>New email:</b>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="New Email">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="ag_name">
                                                            <label for="email">
                                                                <b>Confirm new email: </b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Confirm New Email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="ag_name">
                                                            <label for="password">
                                                                <b>Password: </b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="password" placeholder="Password" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                            </div>
                                            <div class="col-md-12 top30">
                                                <p>If you have forgotten your password and you no longer have access to your
                                                    old email address then please
                                                    <a href="#">email us</a>.</p>
                                            </div>
                                        </div>

                                    </div>
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pro">
                            <!-- Content -->
                            <div id="deals" class="top30 bottom40">
                                <div class="row">
                                        <div class="col-sm-12">
                                                <div class="alert alert-info" role="alert">
                                                  <div class="pull-left">
                                                      <h3>My Properties List</h3>
                                                  </div>
                                                  <div class="pull-right">
                                                      <a href="#submit_pro" data-toggle="tab" class="btn btn-sm btn-default">Submit Property</a>
                                                  </div>
                                              <div class="clearfix"></div>
                                            </div>
                                            </div>
                                    <div class="col-sm-12">
    
    
                                        <?php
                      foreach ($myfav as $value) {
                        ?>
                                            <div class="col-sm-11">
    
                                                <div class="row" style="margin-top:50px;margin-bottom:50px;">
    
                                                    <div class="item">
                                                        <div class="media  deal_media proerty_content">
                                                            <div class="media-left">
                                                                <a href="property_detail?id=2">
    
                                                                    <img class="media-object" src="resources/img/best-deal1.jpg" alt="...">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="pull-right ">
    
                                                                </div>
                                                                <div class="price ag_clr default_clr">
    
                                                                    <h4>£ 25000.00</h4>
                                                                </div>
                                                                <div class="proprty_typ">
                                                                        <div class="pro_ty">
                                                                          <h4>Business</h4>
                                                                        </div>
                                                                      </div>
                                                                <div class="proerty_text pro_dtl">
                                                                    <h3 class="bottom15">
                                                                        <a href="">
                                                                            <?php echo $value['proptitle']?>
                                                                        </a>
                                                                    </h3>
                                                                    <p class="block-with-text">
                                                                        <?php echo $value['propdesc']; ?>
                                                                    </p>
                                                                </div>
                                                                <div class="dealer clearfix">
                                                                    <i class="author">
                                                                        <img src="resources/img/author.png" alt="author">
                                                                    </i>
                                                                    <h4>Hamza Ahmad &nbsp;
                                                                        <small>- Agent</small>
                                                                    </h4>
                                                                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                                                                    <span>
                                                                        <i class="icon-phone4"></i>+44 18232 123849</span>
                                                                    <a href="mailtoagentcontactform">
                                                                        <i class="icon-mail-envelope-closed3"></i>
                                                                    </a>
                                                                </div>
                                                                <div class=" favroute clearfix">
                                                                    <p class="pull-md-left"> Hamza Ahmad</p>
                                                                    <p class="pull-md-left">
                                                                        <small>45 Regent Street London </small>
                                                                    </p>
                                                                    <ul class="pull-right">
                                                                        <li>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="icon-like"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="ag_clr property_meta">
                                                                    <span>
                                                                        <i class="icon-select-an-objecto-tool"></i>5600 sq ft</span>
                                                                    <span>
                                                                        <i class="icon-bed"></i>4 Bedrooms</span>
                                                                    <span>
                                                                        <i class="icon-safety-shower"></i>3 Bedrooms</span>
                                                                    <span>
                                                                        <i class="icon-old-television"></i>3TV Lounge</span>
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
    
                    <div class="tab-pane" id="home">
                        <!-- Content -->
                        <div id="deals" class="top30 bottom40">
                            <div class="row">
                                    <div class="col-sm-12">
                                            <div class="alert alert-info" role="alert">
                                              <div class="pull-left">
                                                  <h3>My Favourite List</h3>
                                              </div>
                                              <div class="pull-right">
                                                  <a href="#submit_pro" data-toggle="tab" class="btn btn-sm btn-default">Submit Property</a>
                                              </div>
                                          <div class="clearfix"></div>
                                        </div>
                                        </div>
                                <div class="col-sm-12">


                                    <?php
                  foreach ($myfav as $value) {
                    ?>
                                        <div class="col-sm-11">

                                            <div class="row" style="margin-top:50px;margin-bottom:50px;">

                                                <div class="item">
                                                    <div class="media  deal_media proerty_content">
                                                        <div class="media-left">
                                                            <a href="property_detail?id=2">

                                                                <img class="media-object" src="resources/img/best-deal1.jpg" alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="pull-right ">

                                                            </div>
                                                            <div class="price ag_clr default_clr">

                                                                <h4>£ 25000.00</h4>
                                                            </div>
                                                            <div class="proprty_typ">
                                                                    <div class="pro_ty">
                                                                      <h4>Business</h4>
                                                                    </div>
                                                                  </div>
                                                            <div class="proerty_text pro_dtl">
                                                                <h3 class="bottom15">
                                                                    <a href="">
                                                                        <?php echo $value['proptitle']?>
                                                                    </a>
                                                                </h3>
                                                                <p class="block-with-text">
                                                                    <?php echo $value['propdesc']; ?>
                                                                </p>
                                                            </div>
                                                            <div class="dealer clearfix">
                                                                <i class="author">
                                                                    <img src="resources/img/author.png" alt="author">
                                                                </i>
                                                                <h4>Hamza Ahmad &nbsp;
                                                                    <small>- Agent</small>
                                                                </h4>
                                                                <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                                                                <span>
                                                                    <i class="icon-phone4"></i>+44 18232 123849</span>
                                                                <a href="mailtoagentcontactform">
                                                                    <i class="icon-mail-envelope-closed3"></i>
                                                                </a>
                                                            </div>
                                                            <div class=" favroute clearfix">
                                                                <p class="pull-md-left"> Hamza Ahmad</p>
                                                                <p class="pull-md-left">
                                                                    <small>45 Regent Street London </small>
                                                                </p>
                                                                <ul class="pull-right">
                                                                    <li>
                                                                        <a href="javascript:void(0)">
                                                                            <i class="icon-like"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="ag_clr property_meta">
                                                                <span>
                                                                    <i class="icon-select-an-objecto-tool"></i>5600 sq ft</span>
                                                                <span>
                                                                    <i class="icon-bed"></i>4 Bedrooms</span>
                                                                <span>
                                                                    <i class="icon-safety-shower"></i>3 Bedrooms</span>
                                                                <span>
                                                                    <i class="icon-old-television"></i>3TV Lounge</span>
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

                    <!-- <div class="tab-pane" id="messages">
                        <div id="deals" class="top30 bottom40">
                            <div class="row">
                                <div class="col-sm-12">
                                    Messages

                                </div>
                            </div>
                        </div>
                    </div> -->
                    

                    <div class="tab-pane" id="invsmnt">
                        <div id="deals" class="top30 bottom40">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="callus" action="search?type=prop" method="POST">
    <div class="row">
       <div class="col-md-6 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" name="keyword" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="single-query form-group">
            <div class="intro town_dtl">
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
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="prop_type">
                <option value="" class="active">Select Type</option>
                <option value="bus">Business</option>
                <option value="com">Commercial</option>
                <option value="res">Residential</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="prop_stat">
                <option value="" class="active">Select Status</option>
                <option value="sale">For Sale</option>
                <option value="rent">For Rent</option>
                <option value="salag">Sale Agreed</option>
                <option value="renag">Rent Agreed</option>
                <option value="sold">Sold</option>
                <option value="rentd">Rented</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="min_area" class="keyword-input" placeholder="Min Area (sq ft)">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" name="max_area" class="keyword-input" placeholder="Max Area (sq ft)">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="row ">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bed">
                    <option value="" class="active">Min. Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bath">
                    <option value="" class="active">Min Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-sm-6">
          <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="single-query form-group">
                        <div class="intro">
                        <select name="min_price">
        
                            <option value="" class="active">Price (Min)</option>
                            <option value="10000">£ 10000</option>
                            <option value="20000">£ 20000</option>
                            <option value="30000">£ 30000</option>
                            <option value="40000">£ 40000</option>
                            <option value="50000">£ 50000</option>
                            <option value="60000">£ 60000</option>
                            <option value="70000">£ 70000</option>
                            <option value="80000">£ 80000</option>
                            <option value="90000">£ 90000</option>
                            <option value="100000">£ 100000</option>
                            <option value="110000">£ 110000</option>
                            <option value="120000">£ 120000</option>
                            <option value="130000">£ 130000</option>
                            <option value="140000">£ 140000</option>
                            <option value="150000">£ 150000</option>
                            <option value="175000">£ 175000</option>
                            <option value="200000">£ 200000</option>
                            <option value="250000">£ 250000</option>
                            <option value="300000">£ 300000</option>
                            <option value="350000">£ 350000</option>
                            <option value="400000">£ 400000</option>
                            <option value="450000">£ 450000</option>
                            <option value="500000">£ 500000</option>
                            <option value="600000">£ 600000</option>
                            <option value="700000">£ 700000</option>
                            <option value="800000">£ 800000</option>
                            <option value="900000">£ 900000</option>
                            <option value="1000000">£ 1000000</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                        <div class="single-query form-group">
                          <div class="intro">
                            <select name="max_price">
                              <option value="" class="active">Price (Max)</option>
                              <option value="10000">£ 10000</option>
                              <option value="20000">£ 20000</option>
                              <option value="30000">£ 30000</option>
                              <option value="40000">£ 40000</option>
                              <option value="50000">£ 50000</option>
                              <option value="60000">£ 60000</option>
                              <option value="70000">£ 70000</option>
                              <option value="80000">£ 80000</option>
                              <option value="90000">£ 90000</option>
                              <option value="100000">£ 100000</option>
                              <option value="110000">£ 110000</option>
                              <option value="120000">£ 120000</option>
                              <option value="130000">£ 130000</option>
                              <option value="140000">£ 140000</option>
                              <option value="150000">£ 150000</option>
                              <option value="175000">£ 175000</option>
                              <option value="200000">£ 200000</option>
                              <option value="250000">£ 250000</option>
                              <option value="300000">£ 300000</option>
                              <option value="350000">£ 350000</option>
                              <option value="400000">£ 400000</option>
                              <option value="450000">£ 450000</option>
                              <option value="500000">£ 500000</option>
                              <option value="600000">£ 600000</option>
                              <option value="700000">£ 700000</option>
                              <option value="800000">£ 800000</option>
                              <option value="900000">£ 900000</option>
                              <option value="1000000">£ 1000000</option>
                            </select>
                          </div>
                        </div>
                      </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
              
            
            <div class="col-md-12 text-right form-group">

              <input name="type" type="hidden" value="prop">
              <button type="submit" class="btn-blue border_radius ">Search</button>
            </div>
          </div>
        </div>
 
    </div>
    <div class="group-button-search">
      <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
        <div class="text-1">Show more search options</div>
        <div class="text-2 hide">less more search options</div>
      </a>
    </div>
    <div class="search-propertie-filters collapse">
      <div class="container-2">
        <div class="row">
          <!-- <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Air Conditioning</span>
            </div>
          </div> -->
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="AC" value="1">
              <span>Air Conditioning</span>
            </div>
          </div> 
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="bbq" value="1">
              <span>Barbeque Grill</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class=" white">
              <input type="checkbox" name="Balcony" value="1">
              <span>Balcony</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Laundry" value="1">
              <span>Laundry</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              
                <input name="Theater" type="checkbox" value="1"> 
                <span>Theater</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Lawn" value="1">
              <span>Lawn</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="white">
              <input type="checkbox" name="Basement" value="1">
              <span>Basement</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="submit_pro">
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
                                                  
                                                  <i class="fa fa-plus-circle">&nbsp;&nbsp;Listing Image</i>
                                                  <br>
                                                  <br>
                                                  <!-- <input type="file" multiple="multiple" name="listing" id="file">
                                                  <label for="agent_image" class="control-label">Agent Image</label> -->
                                                  <div class="form-group">
                                                    <div class="input-group agncy_btn">
                                                      <label class="input-group-btn">
                                                        <span class="btn btn-primary">
                                                          Upload Images&hellip; <input type="file" multiple="multiple" name="listing" id="upload_image" style="display: none;" />
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
                                                <div class="col-sm-12">
                                    
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
                                    
                                    
                                                <div class="col-sm-4">
                                    
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
                                                <div class="col-sm-4">
                                    
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
                                                
                                                <div class="col-sm-4 top30">
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



        </div>

    </section>
