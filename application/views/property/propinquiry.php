
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            
                             <?php   
                             if(!empty($inquiry)){
                             foreach($inquiry as $val): ?>
                            <div class="col-md-6">

                                <div class="tab-pane">

                                    <div class="invoice-col">
                                        <br>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <h3 class="box-title">
                                                    <b>Inquiry Detail</b>
                                                </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="box-title">
                                                    <b>User Name:</b>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ag_inq">
                                                    <?php 
                                                   
                                                        echo $val['fullname'];
                                                    
                                                    
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
                                                    
                                                        echo $val['useroption'];
                                                    
                                                   
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
                                                        echo $val['email'];
                                                    
                                                    
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
                                                   
                                                        echo $val['phone'];
                                                   
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
                                                   
                                                        echo $val['message'];
                                                    
                                                
                                                    ?>
                                                </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>

                            </div>
                    <?php 
                                    endforeach;
                                    } 
                                    else
                                    {
                                        echo "<h3>No inquiry for this property.</h3>";
                                    }
                                    ?>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
               
                

     