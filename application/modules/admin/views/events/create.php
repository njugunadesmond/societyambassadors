        <title><?php echo ucwords($title); ?> | Society Ambassadors</title>
    </head>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url()?>admin">
                        <img src="<?php echo base_url('public/admin/layouts/layout4/img/logo-light.png') ?>" alt="logo" class="logo-default" /> </a>
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
                                    <img alt="" class="img-circle" src="../public/admin/layouts/layout4/img/avatar.png" /> </a>
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
                        <li class="nav-item ">
                            <a href="<?php echo base_url() ;?>admin" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
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
                        <li class="nav-item  active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Events</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  active">
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
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Members</span>
                                <span class="arrow"></span>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/members/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Add New Member</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
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
                                <span class="title">Users</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url() ;?>admin/users/create" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Create Users</span>
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
                            <a href="<?php echo base_url()?>auth/logout" class="nav-link nav-toggle">
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
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<php echo base_url(); ?>">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Add New Event</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet box ">
                                                    <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form method="post" enctype="multipart/form-data">
                                                            <?php echo validation_errors(); ?>

                                                            <?php echo form_open_multipart('admin/events/create'); ?>
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="event_photo">Event Photo</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                                        <div>
                                                                            <span class="btn red btn-outline btn-file">
                                                                                <span class="fileinput-new">Select Image</span>
                                                                                <span class="fileinput-exists">Change</span>
                                                                                <input type="file" name="event_photo" >
                                                                            </span>
                                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="member_name">Venue</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-map-marker"></i>
                                                                        </span>
                                                                        <input type="text" name="event_venue" style="text-transform: capitalize;" class="form-control" placeholder="Event Venue" value="<?php echo set_value('event_venue')?>"> </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="single" class="control-label">Select Type of Event</label>
                                                                    <select id="single" class="form-control select2" name="select_type_of_event" >
                                                                        <option value="Anniversary">Anniversary</option>
                                                                        <option value="Charity">Charity</option>
                                                                        <option value="Hike">Hike</option>
                                                                        <option value="team_building">Team Building</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="date_range">Date Range</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                                            <input type="text" class="form-control" name="event_start_date" placeholder="Event Start Date">
                                                                            <span class="input-group-addon"> to </span>
                                                                            <input type="text" class="form-control" name="event_end_date" placeholder="Event End Date"> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="event_gate_pass">Gate Pass</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-compass"></i>
                                                                        </span>
                                                                        <input type="text" name="event_gate_pass" class="form-control" placeholder="2 spoons, 2 plates..." value="<?php echo set_value('event_gate_pass')?>"> </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="event_meeting_point">Meeting Point</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-map-marker"></i>
                                                                        </span>
                                                                        <input type="text" name="event_meeting_point"class="form-control" placeholder="Skate Park" value="<?php echo set_value('event_meeting_point')?>"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="btn-set pull-left">
                                                                    <button type="submit" class="btn green">Submit</button>
                                                                    <button type="button" class="btn default">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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