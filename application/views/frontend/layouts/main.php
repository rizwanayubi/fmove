<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Favourite Move</title>

<link rel="stylesheet" type="text/css" href="resources/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="resources/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="resources/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="resources/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="resources/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="resources/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/settings.css">
<link rel="stylesheet" type="text/css" href="resources/css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/search.css">
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
<link rel="stylesheet" type="text/css" href="resources/css/rizwan.css">
<link rel="stylesheet" type="text/css" href="resources/css/dropify.min.css">
<link rel="icon" href="resources/img/fav_icon.png">
<!-- <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" /> -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108823654-1"></script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800" rel="stylesheet"> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108823654-1');
</script>
<script>
</script>
</head>
<body onLoad="getLocation ();">

<!--Loader-->
 <!--  <div class="loader">
    <div class="span">
      <div class="location_indicator"></div>
    </div>
  </div> -->
  <!--Loader-->



<header class="layout_double">
  <div class="topbar dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>We are Best in Town With 40 years of Experience.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
          <?php if($this->session->userdata('userData')['role'] == "agent"){ ?>
          <li><a href="agprof" <?php if($_view == 'frontend/views/user_profile'){ ?>  <?php }?>><i class="icon-icons230"></i>User Settings</a></li>
          <li><a href="agent_home" <?php if($_view == 'frontend/views/my_prop'){ ?>  <?php }?> ><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="ag_submit" <?php if($_view == 'frontend/views/submit_prop'){ ?>  <?php }?> ><i class="icon-icons215"></i> Submit Property</a></li>
          
          <?php }
          else if($this->session->userdata('userData')['role'] == "user")
          { ?>
            <li><a href="usprof" <?php if($_view == 'frontend/views/user_profile'){ ?> <?php }?>><i class="icon-icons230"></i>Profile</a></li>
          <!-- <li><a href="ag_submit" <?php if($_view == 'frontend/views/submit_prop'){ ?> class="active" <?php }?> ><i class="icon-icons215"></i> Submit Property</a></li> -->
          <li><a href="usmyfavs" <?php if($_view == 'frontend/views/fav_prop'){ ?>  <?php }?>><i class="icon-icons43"></i> Favorite Properties</a></li>
          <?php }?>
          <?php if (isset($curr_login))
          { ?>
            <li class="colors"><a href="logout"><i class="icon-icons179"></i>Logout</a></li>
            <?php } else
          { ?>
            <li class="colors"><a href="user_login"><i class="icon-icons179"></i>Login / Register</a></li>
            <?php } ?>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo">
            <a href="index.php"><img alt="" src="resources/img/logo.png" class="img-responsive">
          <!-- <h3 style="color:white;">LOGO</h3> -->
        </a>
          </div>
        </div>
        <!--Info Box-->
        <div class="mb_scr col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
              <li>+44 90023 45678</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Favourite Move</strong></li>
              <li>London, UK</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
              <li><a href="#">info@favouritemove.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="attr-nav">
        <ul class="social_share clearfix">
        <li><a href="https://www.facebook.com/Favorite-Move-289824988168746/" class="facebook"><i class="icon-facebook-1"></i></a></li>
          <li><a href="https://twitter.com/FavoriteMove?lang=en" class="twitter"><i class="icon-twitter-1"></i></a></li>
          <li><a href="https://plus.google.com/u/0/117312310920088960356" class="google"><i class="icon-google4"></i></a></li>
          <li><a href="https://www.linkedin.com/in/favorite-move-6b703a151/" class="linkden"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
          </button>
        <a class="navbar-brand sticky_logo" href="index.php">
          <!-- <h3 style="color:black;">LOGO</h3> -->
          <img src="resources/img/logo_sticky.jpg" class="logo" alt="">
        </a>
      </div>
      <!-- End Header Navigation -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
          <li><a href="<?= base_url()?>">Home</a></li>
          <li><a href="aboutus">About Us</a></li>
         
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h5 class="title">PROPERTIES LIST</h5>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="properties?o=b">Business Properties</a></li>
                        <li><a href="properties?o=r">Residential Properties</a></li>
                        <li><a href="properties?o=c">Commercial Properties</a></li>
                        <li><a href="properties?o=n">Newly Built Properties</a></li>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-9">
                    <h5 class="title bottom20">PROPERTIES LIST</h5>
                    <div class="row">
                      <div id="nav_slider" class="owl-carousel">
                       <?php //var_dump($dropdown_props); die(); ?>
                        <?php foreach ($dropdown_props as $prop){

                          ?>

                        <div class="item">
                          <div class="image bottom15">
                            <a href="property_detail?id=<?= $prop['prop_id'] ?>"><img src="<?= $assets;?>img/properties/<?= $prop['prop_id'] ?>/cover.jpg" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">for rent</span></a>
                          </div>
                          <h4><a href="property_detail?id=<?= $prop['prop_id'] ?>"><?= $prop['title'] ?></a></h4>
                          <p><?= $prop['address']?></p>
                        </div>
                        <?php } ?>

                        
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agents</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h5 class="title">AGENT LIST</h5>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="agents?s=1">Nearby Agents</a></li>
                        <li><a href="agents?l=1">List Agents</a></li>
                        <li><a href="prop_eval">Property Evaluation</a></li>
                        <!-- <li><a href="listing2.html">Search by City</a></li>
                          <li><a href="listing5.html">Search by Category</a></li>
                          <li><a href="listing3.html">Search by Type</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-menu col-md-9">
                    <h5 class="title bottom20">AGENT LIST</h5>
                    <div class="row">
                      <div id="nav_slider" class="owl-carousel">
                        

                        <?php foreach($dropdown_agent as $agent){ ?> 
                        <div class="item agent_list_sldr">
                          <div class="image bottom15">
                            <a href="agent_detail?id=<?= $agent['id']?>">
                            <img src="<?php echo base_url('resources/img/agents/' .$agent['image'])?>" alt="Featured Property">
                            <span class="nav_tag yellow text-uppercase">Available</span>
                            </a>
                          </div>
                          <h4><a href="agent_detail?id=<?= $agent['id']?>"><?= $agent['fname'] . $agent['lname']?> </a></h4>
                          <p><?= $agent['address']?></p>
                        </div>

                      <?php } ?>

                        
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>

          
          <li><a href="news">News</a></li>
       
          <li><a href="contactus">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<?php if (isset($curr_login)){ ?>
<div class="container-fluid">
  <div class="row" style="margin-top: 25px">
  <div align="center">
    <?php $this->load->view('frontend/layouts/usernav.php', $_view);?>
  </div>
  </div>  
  

</div>
 <?php } 
       if ($this->session->flashdata('inquiry') == 'true')
       {
        echo "<script>alert('Inquiry Added Successfully');</script>";
       }
       else if ($this->session->flashdata('inquiry') == 'false')
       {
        echo "<script>alert('Inquiry not Added. Please Try again');</script>";
       }
        $data['assets'] = $assets;
        if(isset($_view) && $_view)
        {
          if(isset($defdata) && $defdata)
          {
            
            $data = $defdata;
            
          }
          if(isset($viewdata) && $viewdata)
          {

            $data['viewdata'] = $viewdata;
                $this->load->view($_view,$data);
          }
          else
          {
            $this->load->view($_view,$data);
          }
      }
        else
          {
             show_404();
          }
    ?>



<!--Footer-->
<footer class="footer_fourth">

<div class="container top30">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <a href="#." class="logo bottom30">
            <img src="resources/img/logo_sticky.jpg" class="img-thumbnail" alt="">
            <!-- <h2>LOGO</h2> -->
        </a>
        <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
          tempor cum consectetuer 
          adipiscing.
        </p>
        
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Quick Links</h4>
        <table style="width:100%;">
          <tbody>
            <tr>
              <td>
                <ul class="links">
                  <li><a href="aboutus"><i></i>About</a></li>
                  <li class="active"><a href="news"><i></i>News</a></li>
                  <li><a href="contactus"> <i></i>Contacts</a></li>
                  
                 
                </ul>
              </td>
              <!-- <td class="text-right">
                <ul class="links text-left">
                  <li><a href="#."><i></i>Services</a></li>
                  <li class="active"><a href="#."><i></i>Careers</a></li>
                  <li><a href="#."><i></i>Our team</a></li>
                  <li><a href="#."><i></i>Shop</a></li>
                  <li><a href="#."><i></i>Our approach</a></li>
               
                </ul>
              </td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Properties</h4>
        <table style="width:100%;">
          <tbody>
            <tr>
              <td>
                <ul class="links">
                  <li><a href="properties?o=b"><i></i>Business Properties</a></li>
                  <li><a href="properties?o=r"><i></i>Residential Properties</a></li>
                  <li><a href="properties?o=c"><i></i>Commercial Properties</a></li>
                  <li><a href="properties?o=n"><i></i>Newly Built Properties</a></li>
                 
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Get in Touch</h4>
        <ul class="getin_touch">
          <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
          <li><a href="javascript:void(0)"><i class="icon-mail-envelope-open"></i>info@castle.com</a></li>
          <li><a href="javascript:void(0)"><i class="icon-global"></i>www.castle.com</a></li>
          <li><i class="icon-icons74"></i>London, UK</li>
        </ul>
      </div>
    </div> -->
    <div class="col-md-3 col-sm-6">
      <div class="footer_panel bottom30">
        <h4 class="bottom30">Subscribe</h4>
        <p>Sign up with your email to get latest updates and offers</p>

        <form class="top30" action="subscribe" method="POST">
          <input class="search" name="email" placeholder="Enter your Email" type="search">
          <button class="button_s" type="submit">
            <i class="icon-mail-envelope-open"></i>
          </button>
        </form>

      </div>
    </div>
  </div>
  <!--CopyRight-->
  <div class="copyright_simple">
    <div class="row">
      <div class="col-md-6 col-sm-5 top20 bottom20">
        <p>Copyright &copy; 2017 <span><a href="http://www.favouritemove.com/">Favourite Move</a></span>. All rights reserved.</p>
      </div>
      <div class="col-md-6 col-sm-7 text-right top15 bottom10">
        <ul class="social_share">
          <li><a href="https://www.facebook.com/Favorite-Move-289824988168746/" class="facebook"><i class="icon-facebook-1"></i></a></li>
          <li><a href="https://twitter.com/FavoriteMove?lang=en" class="twitter"><i class="icon-twitter-1"></i></a></li>
          <li><a href="https://plus.google.com/u/0/117312310920088960356" class="google"><i class="icon-google4"></i></a></li>
          <li><a href="https://www.linkedin.com/in/favorite-move-6b703a151/" class="linkden"><i class="fa fa-linkedin"></i></a></li>
          <!-- <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>





<script src="<?= $assets;?>js/jquery-2.1.4.js"></script>
<script src="<?= $assets;?>js/bootstrap.min.js"></script>
<script src="<?= $assets;?>js/bootsnav.js"></script>
<script src="<?= $assets;?>js/jquery.parallax-1.1.3.js"></script>
<script src="<?= $assets;?>js/jquery.appear.js"></script>
<script src="<?= $assets;?>js/jquery-countTo.js"></script>
<script src="<?= $assets;?>js/masonry.pkgd.min.js"></script>
<script src="<?= $assets;?>js/range-Slider.min.js"></script>
<script src="<?= $assets;?>js/owl.carousel.min.js"></script>
<script src="<?= $assets;?>js/jquery.cubeportfolio.min.js"></script>
<script src="<?= $assets;?>js/selectbox-0.2.min.js"></script>
<script src="<?= $assets;?>js/zelect.js"></script>
<script src="<?= $assets;?>js/jquery.fancybox.js"></script>
<script src="<?= $assets;?>js/jquery.themepunch.tools.min.js"></script>
<script src="<?= $assets;?>js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= $assets;?>js/revolution.extension.layeranimation.min.js"></script>
<script src="<?= $assets;?>js/revolution.extension.navigation.min.js"></script>
<script src="<?= $assets;?>js/revolution.extension.parallax.min.js"></script>
<script src="<?= $assets;?>js/revolution.extension.slideanims.min.js"></script>
<script src="<?= $assets;?>js/revolution.extension.video.min.js"></script>
<script src="<?= $assets;?>js/custom.js"></script>
<script src="<?= $assets;?>js/functions.js"></script>
<script src="<?= $assets;?>js/jquery.smoothscroll.min.js"></script>
<script src="<?= $assets;?>js/dropify.min.js"></script>
  <script>
  
      $(document).ready(function(){
           $('.dropify').dropify();
        $('html').smoothScroll(300);
          $("#show").click(function(){
              $("#packagedeal").show();
          });
          // $('.single').owlCarousel({
          //     items:1,
          //     margin:10,
          //     autoHeight:true
          // });
          $('#upload_image').change(function() {
              var filename = $(this).val();
              var lastIndex = filename.lastIndexOf("\\");
              if (lastIndex >= 0) {
                  filename = filename.substring(lastIndex + 1);
              }
              $('#upload_image_sho').val(filename);
          });
          $("#upload_mlt_images").change(function() {
                var names = [];
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    names.push($(this).get(0).files[i].name);
                }
                $("#sho_mlt_images").val(names);
            });
            $('#sb').bind("click",function() 
                { 
                    var imgVal = $('#upload_image').val(); 
                    var imgVal_mult = $('#upload_mlt_images').val(); 
                    if(imgVal=='') 
                    { 
                        alert("Please Upload Cover Image"); 
            
                    } 
                    else if(imgVal_mult=='') 
                    { 
                        alert("Please Upload Listing Images"); 
            
                    } 
                    return false; 
                    
            
                }); 
          $('a[data-toggle="tab"]').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
          });

          $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
              var id = $(e.target).attr("href");
              localStorage.setItem('selectedTab', id)
          });

          var selectedTab = localStorage.getItem('selectedTab');
          if (selectedTab != null) {
              $('a[data-toggle="tab"][href="' + selectedTab + '"]').tab('show');
          }
          $('[data-toggle="tooltip"]').tooltip(); 
        });
  </script>
  <script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script> -->

<!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script>  -->
<!-- <script src="<?= $assets;?>js/editor.js"></script> -->
<!-- <script src="<?= $assets;?>js/dropzone.min.js"></script> -->
<!-- <script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 


</script> -->
<!-- <script type="text/javascript" language="javascript">
function myMap() {
  var mapCanvas = document.getElementById("single_map");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
  animation:google.maps.Animation.BOUNCE,
    icon: "<?= $assets;?>img/map_marker.png"
  });
  marker.setMap(map);
}

</script> -->
</body>
</html>



