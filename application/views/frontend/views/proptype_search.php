

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Listing</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Property Listing</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



    <!--Best Deal Properties-->
    <section id="deals" class="padding bg_light">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">  
      <div class="row">
        <div class="col-sm-12 ">
          <p class="pull-left pro_lis col-md-10">We are proud to present to you some of the best homes, apartments, offices e.g. across England for affordable prices.</p>
          <p class="pull-right"><?php echo count($viewdata); ?> Listings Found</p>
        </div>
      </div>
      
     
          <?php 
          //var_dump($viewdata); die();
          foreach($viewdata as $property) {  ?>
    
      <div class="row" style="margin-top:10px;margin-bottom:50px;">
        <div class="col-sm-12">      
         
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
                  <div class="proerty_text pro_dtl">
                    <h3 class="bottom15"> <a href="property_detail?id=<?php echo $property['prop_id']; ?>"><?= $property['title'] ?></a></h3>
                    <p class="block-with-text">
                      <?= $property['description'] ?>
                    </p>
                  </div>
                  <div class="dealer clearfix">
                    <a href="agent_detail?id=<?php echo $property['id'];?>">
                    <i class="author"><img width="70px" src="<?php echo base_url('resources/img/agents/' . $property['image']);?>" alt="agency"></i>
                    <h4><?= $property['fname'] ." ". $property['lname']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $property['phone']?></span> 
                      <!-- <a href="mailtoagentcontactform"> --><i class="icon-mail-envelope-closed3"></i><!-- </a>  -->
                      </a>
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $property['fname'] ." ". $property['lname']?></p>
                    <p class="pull-md-left"><?= $property['address']?> </p>
                    <ul class="pull-right">
                      <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
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
                    <span><i class="icon-select-an-objecto-tool"></i><?= $property['area']?> sq ft</span>
                    <span><i class="icon-bed"></i><?= $property['bedrooms']?> Bedrooms</span> 
                    <span><i class="icon-safety-shower"></i><?= $property['bathrooms']?> Bedrooms</span> 
                    <span><i class="icon-old-television"></i><?= $property['lounge']?>TV Lounge</span> 
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
            
         
           <?php }?>
        

            </div>

            <div class="col-sm-3 bottom10 top30">
                <div class="top30">
                  <aside class="col-md-12 col-xs- top30">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="#">
                          <div class="image-2">
                            <img src="https://tpc.googlesyndication.com/simgad/15734968460721435892" alt="" class="img_ad" width="300" height="160" border="0">
    
                          </div>
                        </a>
                      </div>
                    </div>
                  </aside>
                </div>
            </div>
    

    </div>
    </div>
  </section>
  