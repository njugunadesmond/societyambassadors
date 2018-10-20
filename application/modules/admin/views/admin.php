        <title>Admin | Society Ambassadors</title>
    </head>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url(); ?>admin">
                        <img src="public/admin/layouts/layout4/img/design-logo-1.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Admin </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="public/admin/layouts/layout4/img/avatar.png" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url()?>auth/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item active start open">
                            <a href="<?php echo base_url() ;?>admin" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Blog</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/blog/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Create Blog</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/blog" class="nav-link ">
                                        <i class="fa fa-list-alt"></i>
                                        <span class="title">List Blogs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Events</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/events/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Create Event</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/events" class="nav-link ">
                                        <i class="fa fa-list-alt"></i>
                                        <span class="title">List Events</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Members</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/members/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Add New Member</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="<?php echo base_url() ;?>admin/members" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">List Members</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-black-tie"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/users/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Create User</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/users" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">List Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url() ;?>auth/logout" class="nav-link nav-toggle">
                                <i class="fa fa-sign-out"></i>
                                <span class="title">Log Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Admin Dashboard</h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" data-display-range="0" class="pull-right tooltips btn btn-fit-height green" data-placement="left" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>&nbsp;
                                <span class="thin uppercase hidden-xs"></span>&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>HEADER</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default active" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light " data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo base_url() ?>admin">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light bordered">
                        <div class="portlet-body">
                            <div class="tiles">
                                <a href="<?php echo base_url(); ?>admin/events">
                                    <div class="tile double-down bg-blue-hoki">
                                        <div class="tile-body">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                        <div class="tile-object">
                                            <div class="name"> Events </div>
                                            <div class="number"> 
                                                <?php echo $events; ?>
                                            </div>
                                        </div>
                                    </div> 
                                </a>
                                <!-- <div class="tile bg-red-sunglo">
                                    <div class="tile-body">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Meetings </div>
                                        <div class="number"> 12 </div>
                                    </div>
                                </div> -->
                                <!-- <div class="tile double selected bg-green-turquoise">
                                    <div class="corner"> </div>
                                    <div class="check"> </div>
                                    <div class="tile-body">
                                        <h4>support@metronic.com</h4>
                                        <p> Re: Metronic v1.2 - Project Update! </p>
                                        <p> 24 March 2013 12.30PM confirmed for the project plan update meeting... </p>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="number"> 14 </div>
                                    </div>
                                </div> -->
                                <a href="<?php echo base_url(); ?>admin/members">
                                    <div class="tile  bg-yellow-saffron">
                                        <div class="corner"> </div>
                                        <div class="tile-body">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="tile-object">
                                            <div class="name"> Members </div>
                                            <div class="number"> 
                                                <?php echo $members; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url()?>admin/users">
                                    <div class="tile double bg-blue-madison">
                                        <div class="tile-body">
                                            <i class="fa fa-user-secret"></i>
                                        </div>
                                        <div class="tile-object">
                                            <div class="name"> Admins </div>
                                            <div class="number"> 
                                                <?php echo $admins; ?>
                                            </div>
                                        </div>
                                    </div> 
                                </a>
                                <!-- <div class="tile bg-purple-studio">
                                    <div class="tile-body">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Orders </div>
                                        <div class="number"> 121 </div>
                                    </div>
                                </div> 
                                <div class="tile image selected">
                                    <div class="tile-body">
                                        <img src="<?php echo base_url('public/admin/pages/media/gallery/image2.jpg'); ?>" alt=""> </div>
                                    <div class="tile-object">
                                        <div class="name"> Media </div>
                                    </div>
                                </div> -->
                                <a href="<?php echo base_url()?>admin/blog">
                                    <div class="tile bg-green-meadow">
                                        <div class="tile-body">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="tile-object">
                                            <div class="name"> Blogs </div>
                                            <div class="number"> 
                                                <?php echo $blogs;?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="tile double bg-grey-cascade">
                                    <div class="tile-body">
                                        <img src="../public/assets/pages/media/profile/photo2.jpg" alt="" class="pull-right">
                                        <h3>@lisa_wong</h3>
                                        <p> I really love this theme. I look forward to check the next release! </p>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                        <div class="number"> 10:45PM, 23 Jan </div>
                                    </div>
                                </div> -->
                                <!-- <div class="tile bg-red-intense">
                                    <div class="tile-body">
                                        <i class="fa fa-coffee"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Meetups </div>
                                        <div class="number"> 12 Jan </div>
                                    </div>
                                </div>
                                <div class="tile bg-green">
                                    <div class="tile-body">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Reports </div>
                                        <div class="number"> </div>
                                    </div>
                                </div>
                                <div class="tile bg-blue-steel">
                                    <div class="tile-body">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Documents </div>
                                        <div class="number"> 124 </div>
                                    </div>
                                </div> -->
                                <!-- <div class="tile image double selected">
                                    <div class="tile-body">
                                        <img src="<?php echo base_url('public/admin/pages/media/gallery/image4.jpg'); ?>" alt=""> </div>
                                    <div class="tile-object">
                                        <div class="name"> Gallery </div>
                                        <div class="number"> 124 </div>
                                    </div>
                                </div> -->
                                <!-- <div class="tile bg-yellow-lemon selected">
                                    <div class="corner"> </div>
                                    <div class="check"> </div>
                                    <div class="tile-body">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Settings </div>
                                    </div>
                                </div>
                                <div class="tile bg-red-sunglo">
                                    <div class="tile-body">
                                        <i class="fa fa-plane"></i>
                                    </div>
                                    <div class="tile-object">
                                        <div class="name"> Projects </div>
                                        <div class="number"> 34 </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>