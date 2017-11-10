<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Favourite Move</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Agent Profile  -->
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/search.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/dropzone.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/style.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/css/editor.css');?>">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/rizwan.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/slick.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/slick-theme.css');?>">
        <link href="<?php echo site_url('resources/css/typeahead.css');?>"  rel="stylesheet" />
	    <link href="<?php echo site_url('resources/css/bootstrap-tagsinput.css');?>" rel="stylesheet">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><img src="<?php echo site_url('resources/img/fav_icon.png');?>" class="user-image" alt="User Image" width="50%"></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"> <img src="<?php echo site_url('resources/img/logo.png');?>" class="user-image" alt="User Image" width="50%"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user.png');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Admin</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user.png');?>" class="img-circle" alt="User Image">

                                    <p>
                                        Admin - Web Developer
                                        <!-- <small>Member since Nov. 2012</small> -->
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div> -->
                                        <div class="pull-right">
                                            <a href="/fmove/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user.png');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Admin</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url('/admin');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Admin</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('admin/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/admin_list');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                < class="fa fa-picture-o "></i> <span>Ads</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('ad/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('ad/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-building-o "></i> <span>Agency</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('agency/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('agency/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Agent</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('agent/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('agent/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>User</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i> <span>News</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('news/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('news/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-dot-circle-o "></i> <span>Property Positions</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('prop_position/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('prop_position/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Feature</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('feature/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('feature/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class="fa fa-tags"></i> <span>Package</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="/fmove/package/showpkg"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('package/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Prop Detail</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('prop_detail/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('prop_detail/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class="fa fa-building-o "></i> <span>Property</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('property/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('property/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="">
                                <i class="fa fa-phone"></i> <span>Contact Numbers</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <a href="<?php echo site_url('admin/contact');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('property/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Uk Town</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('uk_town/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('uk_town/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>FavouriteMove.com</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

       


        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/slick.js');?>"></script>
        <!-- Agent Profile  -->
        <script src="<?php echo site_url('resources/js/masonry.pkgd.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/editor.js');?>"></script>
        <script src="<?php echo site_url('resources/js/selectbox-0.2.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/dropzone.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/zelect.js');?>"></script>
        <script src="<?php echo site_url('resources/js/neary-by-place.js');?>"></script> 
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script> 
        <script src="<?php echo site_url('resources/js/google-map.js');?>"></script> 
        <script src="<?php echo site_url('resources/js/custom.js');?>"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>

        <script src="<?php echo site_url('resources/js/typeahead.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-tagsinput.js');?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
    <script>
    jQuery(document).ready(function() {
       
        jQuery("#packges_d").change(function() {
            if (jQuery(this).val() === 'days'){ 
                jQuery('#daily_pac').fadeIn();  
                $('#mar_chkbx').addClass( "top30" ) 
            } else {
                jQuery('#daily_pac').hide(); 
                $('#mar_chkbx').removeClass( "top30" ) 
            }
        });

        $('#loc_form').hide();
        //show it when the checkbox is clicked
        $('input[name="set_location"]').on('click', function () {
            if ($(this).prop('checked')) {
                $('#loc_form').fadeIn();
            } else {
                $('#loc_form').hide();
            }
        });
        
        $('.prop_img').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            dots: true,
            arrows: true,
            autoplaySpeed: 2000,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
        });
       
    });
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
    </script>
<script>
	var countries = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  prefetch: {
		url: 'resources/data/town.json',
		filter: function(list) {
		  return $.map(list, function(name) {
			return { name: name }; });
		}
	  }
	});
	countries.initialize();

	$('#tags-input').tagsinput({
	  typeaheadjs: {
		name: 'countries',
		displayKey: 'name',
		valueKey: 'name',
		source: countries.ttAdapter()
	  }
	});
</script>
    </body>
</html>
