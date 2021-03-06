<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 10:58:09 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flex Admin - Responsive Admin Theme</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="{{ asset('/css/plugins/pace/pace.css') }}" rel="stylesheet">


    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="{{ asset('/css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="{{ asset('/icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('/css/plugins/messenger/messenger.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins/messenger/messenger-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins/morris/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins/datatables/datatables.css') }}" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="{{ asset('/css/demo.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>

<div id="wrapper">

<!-- begin TOP NAVIGATION -->
<nav class="navbar-top" role="navigation">








<!-- begin BRAND HEADING -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
        <i class="fa fa-bars"></i> Menu
    </button>
    <div class="navbar-brand">
        <a href="index-2.html">
            <img src="{{ asset('/img/flex-admin-logo.png') }}" data-1x="img/flex-admin-logo@1x.png" data-2x="img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
        </a>
    </div>

</div>
<!-- end BRAND HEADING -->










<div class="nav-top">



<!-- begin LEFT SIDE WIDGETS -->
<ul class="nav navbar-left">
    <li class="tooltip-sidebar-toggle">
        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
            <i class="fa fa-bars"></i>
        </a>
    </li>
    <!-- You may add more widgets here using <li> -->
</ul>
<!-- end LEFT SIDE WIDGETS -->




<!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
<ul class="nav navbar-right">


<!-- begin MESSAGES DROPDOWN -->
<li class="dropdown">
    <a href="#" class="messages-link dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope"></i>
        <span class="number">4</span> <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-scroll dropdown-messages">

        <!-- Messages Dropdown Heading -->
        <li class="dropdown-header">
            <i class="fa fa-envelope"></i> 4 New Messages
        </li>

        <!-- Messages Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
        <li id="messageScroll">
            <ul class="list-unstyled">

                <li>
                    <a href="#">
                        <div class="row">
                            <div class="col-xs-2">
                                <img class="img-circle" src="{{ asset('/img/user-profile-4.jpg') }}" alt="">
                            </div>
                            <div class="col-xs-10">
                                <p>
                                    <strong>Jeffrey Cortez</strong>: Check out this video I found the other day, it's...
                                </p>
                                <p class="small">
                                    <i class="fa fa-clock-o"></i> Tuesday at 12:23 PM
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Messages Dropdown Footer -->
        <li class="dropdown-footer">
            <a href="mailbox.html">Read All Messages</a>
        </li>

    </ul>
    <!-- /.dropdown-menu -->
</li>
<!-- /.dropdown -->
<!-- end MESSAGES DROPDOWN -->


<!-- begin ALERTS DROPDOWN -->
<li class="dropdown">
    <a href="#" class="alerts-link dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell"></i>
        <span class="number">9</span><i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-scroll dropdown-alerts">

        <!-- Alerts Dropdown Heading -->
        <li class="dropdown-header">
            <i class="fa fa-bell"></i> 9 New Alerts
        </li>

        <!-- Alerts Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
        <li id="alertScroll">
            <ul class="list-unstyled">
                <li>
                    <a href="#">
                        <div class="alert-icon green pull-left">
                            <i class="fa fa-money"></i>
                        </div>
                        Order #2931 Received
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>3 minutes ago</em>
                                                </strong>
                                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon blue pull-left">
                            <i class="fa fa-comment"></i>
                        </div>
                        New Comments
                        <span class="badge blue pull-right">15</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon orange pull-left">
                            <i class="fa fa-wrench"></i>
                        </div>
                        Crawl Errors Detected
                        <span class="badge orange pull-right">3</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon yellow pull-left">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        Server #2 Not Responding
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>5:25 PM</em>
                                                </strong>
                                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon red pull-left">
                            <i class="fa fa-bolt"></i>
                        </div>
                        Server #4 Crashed
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>3:34 PM</em>
                                                </strong>
                                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon green pull-left">
                            <i class="fa fa-plus-circle"></i>
                        </div>
                        New Users
                        <span class="badge green pull-right">5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon orange pull-left">
                            <i class="fa fa-download"></i>
                        </div>
                        Downloads
                        <span class="badge orange pull-right">16</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon purple pull-left">
                            <i class="fa fa-cloud-upload"></i>
                        </div>
                        Server #8 Rebooted
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>12 hours ago</em>
                                                </strong>
                                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="alert-icon red pull-left">
                            <i class="fa fa-bolt"></i>
                        </div>
                        Server #8 Crashed
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>12 hours ago</em>
                                                </strong>
                                            </span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Alerts Dropdown Footer -->
        <li class="dropdown-footer">
            <a href="#">View All Alerts</a>
        </li>

    </ul>
    <!-- /.dropdown-menu -->
</li>
<!-- /.dropdown -->
<!-- end ALERTS DROPDOWN -->


<!-- begin TASKS DROPDOWN -->
<li class="dropdown">
    <a href="#" class="tasks-link dropdown-toggle" data-toggle=dropdown>
        <i class="fa fa-tasks"></i>
        <span class=number>10</span><i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-scroll dropdown-tasks">

        <!-- Tasks Dropdown Header -->
        <li class="dropdown-header">
            <i class="fa fa-tasks"></i> 10 Pending Tasks
        </li>

        <!-- Tasks Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
        <li id="taskScroll">
            <ul class="list-unstyled">
                <li>
                    <a href="#">
                        <p>
                            Software Update 2.1
                                                <span class="pull-right">
                                                    <strong>60%</strong>
                                                </span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Server #2 Hardware Upgrade
                                                <span class="pull-right">
                                                    <strong>90%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Call Ticket #2032
                                                <span class="pull-right">
                                                    <strong>72%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Emergency Maintenance
                                                <span class="pull-right">
                                                    <strong>36%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Purchase Order #439
                                                <span class="pull-right">
                                                    <strong>52%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            March Content Update
                                                <span class="pull-right">
                                                    <strong>14%</strong>
                                                </span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Client #42 Data Scrubbing
                                                <span class="pull-right">
                                                    <strong>68%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            PHP Upgrade Server #6
                                                <span class="pull-right">
                                                    <strong>85%</strong>
                                                </span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Malware Scan
                                                <span class="pull-right">
                                                    <strong>66%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            New Employee Intake
                                                <span class="pull-right">
                                                    <strong>98%</strong>
                                                </span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Tasks Dropdown Footer -->
        <li class="dropdown-footer">
            <a href="#">View All Tasks</a>
        </li>

    </ul>
    <!-- /.dropdown-menu -->
</li>
<!-- /.dropdown -->
<!-- end TASKS DROPDOWN -->


<!-- begin USER ACTIONS DROPDOWN -->
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li>
            <a href="profile.html">
                <i class="fa fa-user"></i> My Profile
            </a>
        </li>
        <li>
            <a href="mailbox.html">
                <i class="fa fa-envelope"></i> My Messages
                <span class="badge green pull-right">4</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-bell"></i> My Alerts
                <span class="badge orange pull-right">9</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-tasks"></i> My Tasks
                <span class="badge blue pull-right">10</span>
            </a>
        </li>
        <li>
            <a href="calendar.html">
                <i class="fa fa-calendar"></i> My Calendar
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <i class="fa fa-gear"></i> Settings
            </a>
        </li>
        <li>
            <a class="logout_open" href="#logout">
                <i class="fa fa-sign-out"></i> Logout
                <strong>John Smith</strong>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-menu -->
</li>
<!-- /.dropdown -->
<!-- end USER ACTIONS DROPDOWN -->



</ul>
<!-- /.nav -->
<!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->



</div>
<!--****************************************************************************************-->
</div>
<!-- /.nav-top -->
</nav>
<!-- /.navbar-top -->
<!-- end TOP NAVIGATION -->








<!-- begin SIDE NAVIGATION -->
<nav class="navbar-side" role="navigation">
<div class="navbar-collapse sidebar-collapse collapse">


<ul id="side" class="nav navbar-nav side-nav">
<!-- begin SIDE NAV USER PANEL -->
<li class="side-user hidden-xs">
    <img class="img-circle" src="img/profile-pic.jpg" alt="">
    <p class="welcome">
        <i class="fa fa-key"></i> Logged in as
    </p>
    <p class="name tooltip-sidebar-logout">
        John
        <span class="last-name">Smith</span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
    </p>
    <div class="clearfix"></div>
</li>
<!-- end SIDE NAV USER PANEL -->
<!-- begin SIDE NAV SEARCH -->
<li class="nav-search">
    <form role="form">
        <input type="search" class="form-control" placeholder="Search...">
        <button class="btn">
            <i class="fa fa-search"></i>
        </button>
    </form>
</li>
<!-- end SIDE NAV SEARCH -->
<!-- begin DASHBOARD LINK -->
<li>
    <a class="active" href="index-2.html">
        <i class="fa fa-dashboard"></i> Dashboard
    </a>
</li>
<!-- end DASHBOARD LINK -->
<!-- begin CHARTS DROPDOWN -->
<li class="panel">
    <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
        <i class="fa fa-bar-chart-o"></i> Charts <i class="fa fa-caret-down"></i>
    </a>
    <ul class="collapse nav" id="charts">
        <li>
            <a href="flot.html">
                <i class="fa fa-angle-double-right"></i> Flot Charts
            </a>
        </li>
        <li>
            <a href="morris.html">
                <i class="fa fa-angle-double-right"></i> Morris.js
            </a>
        </li>
    </ul>
</li>

</ul>
<!-- /.side-nav -->



</div>
<!-- /.navbar-collapse -->
<!--********************************************************************************************-->
</nav>







<div id="page-wrapper">
    <div class="page-content">
    @yield('content')

</div>
</div>






    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('/') }}js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('/') }}js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="{{ asset('/') }}js/plugins/popupoverlay/defaults.js"></script>



<div id="logout">
    <div class="logout-message">
        <img class="img-circle img-logout" src="{{ asset('/') }}img/profile-pic.jpg" alt="">
        <h3>
            <i class="fa fa-sign-out text-green"></i> Ready to go?
        </h3>
        <p>Select "Logout" below if you are ready<br> to end your current session.</p>
        <ul class="list-inline">
            <li>
                <a href="{{ url('/auth/logout') }}" class="btn btn-green">
                    <strong>Logout</strong>
                </a>
            </li>
            <li>
                <button class="logout_close btn btn-green">Cancel</button>
            </li>
        </ul>
    </div>
</div>





<div>
    <script src="{{ asset('/js/plugins/popupoverlay/logout.js') }}"></script>
    <!-- HISRC Retina Images -->
    <script src="{{ asset('/js/plugins/hisrc/hisrc.js') }}"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="{{ asset('/js/plugins/messenger/messenger.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/messenger/messenger-theme-flat.js') }}"></script>
    <!-- Date Range Picker -->
    <script src="{{ asset('/js/plugins/daterangepicker/moment.js') }}"></script>
    <script src="{{ asset('/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Morris Charts -->
    <script src="{{ asset('/js/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/morris.js') }}"></script>
    <!-- Flot Charts -->
    <script src="{{ asset('/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <!-- Sparkline Charts -->
    <script src="{{ asset('/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Moment.js -->
    <script src="{{ asset('/js/plugins/moment/moment.min.js') }}"></script>
    <!-- jQuery Vector Map -->
    <script src="{{ asset('/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('/js/demo/map-demo-data.js') }}"></script>
    <!-- Easy Pie Chart -->
    <script src="{{ asset('/js/plugins/easypiechart/jquery.easypiechart.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('/js/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/js/plugins/datatables/datatables-bs3.js') }}"></script>

    <!-- THEME SCRIPTS -->
    <script src="{{ asset('/js/flex.js') }}"></script>
    <script src="{{ asset('/js/demo/dashboard-demo.js') }}"></script>

</div>
</body>


</html>
