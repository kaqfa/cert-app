<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../../index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li class="active"><a href="buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="../tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="../examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="../examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Buttons
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">UI</a></li>
                        <li class="active">Buttons</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-edit"></i>
                                    <h3 class="box-title">Buttons</h3>
                                </div>
                                <div class="box-body pad table-responsive">
                                    <p>Various types of buttons. Using the base class <code>.btn</code></p>
                                    <table class="table table-bordered text-center">
                                        <tr>
                                            <th>Normal</th>
                                            <th>Large <code>.btn-lg</code></th>
                                            <th>Mini <code>.btn-sm</code></th>
                                            <th>Flat <code>.btn-flat</code></th>
                                            <th>Disabled <code>.disabled</code></th>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-default">Default</button></td>
                                            <td><button class="btn btn-default btn-lg">Default</button></td>
                                            <td><button class="btn btn-default btn-sm">Default</button></td>
                                            <td><button class="btn btn-default btn-flat">Default</button></td>
                                            <td><button class="btn btn-default disabled">Default</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-primary">Primary</button></td>
                                            <td><button class="btn btn-primary btn-lg">Primary</button></td>
                                            <td><button class="btn btn-primary btn-sm">Primary</button></td>
                                            <td><button class="btn btn-primary btn-flat">Primary</button></td>
                                            <td><button class="btn btn-primary disabled">Primary</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success">Success</button></td>
                                            <td><button class="btn btn-success btn-lg">Success</button></td>
                                            <td><button class="btn btn-success btn-sm">Success</button></td>
                                            <td><button class="btn btn-success btn-flat">Success</button></td>
                                            <td><button class="btn btn-success disabled">Success</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-info">Info</button></td>
                                            <td><button class="btn btn-info btn-lg">Info</button></td>
                                            <td><button class="btn btn-info btn-sm">Info</button></td>
                                            <td><button class="btn btn-info btn-flat">Info</button></td>
                                            <td><button class="btn btn-info disabled">Info</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-danger">Danger</button></td>
                                            <td><button class="btn btn-danger btn-lg">Danger</button></td>
                                            <td><button class="btn btn-danger btn-sm">Danger</button></td>
                                            <td><button class="btn btn-danger btn-flat">Danger</button></td>
                                            <td><button class="btn btn-danger disabled">Danger</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-warning">Warning</button></td>
                                            <td><button class="btn btn-warning btn-lg">Warning</button></td>
                                            <td><button class="btn btn-warning btn-sm">Warning</button></td>
                                            <td><button class="btn btn-warning btn-flat">Warning</button></td>
                                            <td><button class="btn btn-warning disabled">Warning</button></td>
                                        </tr>
                                    </table>
                                </div><!-- /.box -->
                            </div>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Block buttons -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Block Buttons</h3>
                                </div>
                                <div class="box-body">
                                    <button class="btn btn-default btn-block">.btn-block</button>
                                    <button class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
                                    <button class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
                                </div>
                            </div><!-- /.box -->

                            <!-- Horizontal grouping -->
                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Horizontal Button Group</h3>
                                </div>
                                <div class='box-body table-responsive pad'>
                                    <p>
                                        Horizontal button groups are easy to create with bootstrap. Just add your buttons
                                        inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
                                    </p>

                                    <table class='table table-bordered'>
                                        <tr>
                                            <th>Button</th>
                                            <th>Icons</th>
                                            <th>Flat</th>
                                            <th>Dropdown</th>
                                        </tr>
                                        <!-- Default -->
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Left</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- ./default -->
                                        <!-- Info -->
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">Left</button>
                                                    <button type="button" class="btn btn-info">Middle</button>
                                                    <button type="button" class="btn btn-info">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">1</button>
                                                    <button type="button" class="btn btn-info">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /. info -->
                                        <!-- /.danger -->
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">Left</button>
                                                    <button type="button" class="btn btn-danger">Middle</button>
                                                    <button type="button" class="btn btn-danger">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger">1</button>
                                                    <button type="button" class="btn btn-danger">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.danger -->
                                        <!-- warning -->
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning">Left</button>
                                                    <button type="button" class="btn btn-warning">Middle</button>
                                                    <button type="button" class="btn btn-warning">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning">1</button>
                                                    <button type="button" class="btn btn-warning">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.warning -->
                                        <!-- success -->
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Left</button>
                                                    <button type="button" class="btn btn-success">Middle</button>
                                                    <button type="button" class="btn btn-success">Right</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">1</button>
                                                    <button type="button" class="btn btn-success">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.success -->
                                    </table>
                                </div>
                            </div><!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Button Addon</h3>
                                </div>
                                <div class="box-body">
                                    <p>With dropdown</p>
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group -->
                                    <p>Normal</p>
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger">Action</button>
                                        </div><!-- /btn-group -->
                                        <input type="text" class="form-control">
                                    </div><!-- /input-group -->
                                    <p>Flat</p>
                                    <div class="input-group margin">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" type="button">Go!</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <!-- split buttons box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Split buttons</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Split button -->
                                    <p>Normal slplit buttons:</p>
                                    <div class="margin">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Action</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Action</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- flat split buttons -->
                                    <p>Flat split buttons:</p>
                                    <div class="margin">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-flat">Action</button>
                                            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger btn-flat">Action</button>
                                            <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat">Action</button>
                                            <button type="button" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning btn-flat">Action</button>
                                            <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- end split buttons box -->

                            <!-- social buttons -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Social Buttons (By <a href="https://github.com/lipis/bootstrap-social">Lipis</a>)</h3>
                                </div>
                                <div class="box-body">
                                    <a class="btn btn-block btn-social btn-bitbucket">
                                        <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                                    </a>
                                    <a class="btn btn-block btn-social btn-dropbox">
                                        <i class="fa fa-dropbox"></i> Sign in with Dropbox
                                    </a>
                                    <a class="btn btn-block btn-social btn-facebook">
                                        <i class="fa fa-facebook"></i> Sign in with Facebook
                                    </a>
                                    <a class="btn btn-block btn-social btn-flickr">
                                        <i class="fa fa-flickr"></i> Sign in with Flickr
                                    </a>
                                    <a class="btn btn-block btn-social btn-foursquare">
                                        <i class="fa fa-foursquare"></i> Sign in with Foursquare
                                    </a>
                                    <a class="btn btn-block btn-social btn-github">
                                        <i class="fa fa-github"></i> Sign in with GitHub
                                    </a>
                                    <a class="btn btn-block btn-social btn-google-plus">
                                        <i class="fa fa-google-plus"></i> Sign in with Google
                                    </a>
                                    <a class="btn btn-block btn-social btn-instagram">
                                        <i class="fa fa-instagram"></i> Sign in with Instagram
                                    </a>
                                    <a class="btn btn-block btn-social btn-linkedin">
                                        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                                    </a>
                                    <a class="btn btn-block btn-social btn-tumblr">
                                        <i class="fa fa-tumblr"></i> Sign in with Tumblr
                                    </a>
                                    <a class="btn btn-block btn-social btn-twitter">
                                        <i class="fa fa-twitter"></i> Sign in with Twitter
                                    </a>
                                    <a class="btn btn-block btn-social btn-vk">
                                        <i class="fa fa-vk"></i> Sign in with VK
                                    </a>
                                    <br />
                                    <div class="text-center">
                                        <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                                        <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                        <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                                        <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
                                        <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                        <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                        <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                                    </div>
                                </div>
                            </div><!-- /.box -->

                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Application buttons -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Application Buttons</h3>
                                </div>
                                <div class="box-body">
                                    <p>Add the classes <code>.btn.btn-app</code> to an <code>&lt;a></code> tag to achieve the following:</p>
                                    <a class="btn btn-app">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fa fa-play"></i> Play 
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fa fa-repeat"></i> Repeat 
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fa fa-pause"></i> Pause
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fa fa-save"></i> Save
                                    </a>
                                    <a class="btn btn-app">
                                        <span class="badge bg-yellow">3</span>
                                        <i class="fa fa-bullhorn"></i> Notifications
                                    </a>       
                                    <a class="btn btn-app">
                                        <span class="badge bg-green">300</span>
                                        <i class="fa fa-barcode"></i> Products
                                    </a>
                                    <a class="btn btn-app">
                                        <span class="badge bg-purple">891</span>
                                        <i class="fa fa-users"></i> Users
                                    </a>
                                    <a class="btn btn-app">
                                        <span class="badge bg-teal">67</span>
                                        <i class="fa fa-inbox"></i> Orders
                                    </a>
                                    <a class="btn btn-app">
                                        <span class="badge bg-aqua">12</span>
                                        <i class="fa fa-envelope"></i> Inbox                                        
                                    </a>
                                    <a class="btn btn-app">
                                        <span class="badge bg-red">531</span>
                                        <i class="fa fa-heart-o"></i> Likes                                        
                                    </a>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <!-- Various colors -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Different colors</h3>
                                </div>
                                <div class="box-body">
                                    <p>Mix and match with various background colors. Use base class <code>.btn</code> and add any available <code>.bg-*</code> class</p>
                                    <!-- You may notice a .margin class added
                                    here but that's only to make the content
                                    display correctly without having to use a table-->
                                    <p>
                                        <button class="btn bg-maroon btn-flat margin">.btn.bg-maroon.btn-flat</button>
                                        <button class="btn bg-purple btn-flat margin">.btn.bg-purple.btn-flat</button>
                                        <button class="btn bg-navy btn-flat margin">.btn.bg-navy.btn-flat</button>
                                        <button class="btn bg-orange btn-flat margin">.btn.bg-orange.btn-flat</button>
                                        <button class="btn bg-olive btn-flat margin">.btn.bg-olive.btn-flat</button>
                                    </p>

                                    <p>
                                        <button class="btn bg-maroon margin">.btn.bg-maroon</button>
                                        <button class="btn bg-purple margin">.btn.bg-purple</button>
                                        <button class="btn bg-navy margin">.btn.bg-navy</button>
                                        <button class="btn bg-orange margin">.btn.bg-orange</button>
                                        <button class="btn bg-olive margin">.btn.bg-olive</button>
                                    </p>
                                </div>
                            </div><!-- /.box -->

                            <!-- Vertical grouping -->
                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Vertical Button Group</h3>
                                </div>
                                <div class='box-body table-responsive pad'>

                                    <p>
                                        Vertical button groups are easy to create with bootstrap. Just add your buttons
                                        inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
                                    </p>

                                    <table class='table table-bordered'>
                                        <tr>
                                            <th>Button</th>
                                            <th>Icons</th>
                                            <th>Flat</th>
                                            <th>Dropdown</th>
                                        </tr>
                                        <!-- Default -->
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default">Top</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-default btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- ./default -->
                                        <!-- Info -->
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-info">Top</button>
                                                    <button type="button" class="btn btn-info">Middle</button>
                                                    <button type="button" class="btn btn-info">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-info">1</button>
                                                    <button type="button" class="btn btn-info">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /. info -->
                                        <!-- /.danger -->
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger">Top</button>
                                                    <button type="button" class="btn btn-danger">Middle</button>
                                                    <button type="button" class="btn btn-danger">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-danger btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-danger">1</button>
                                                    <button type="button" class="btn btn-danger">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.danger -->
                                        <!-- warning -->
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning">Top</button>
                                                    <button type="button" class="btn btn-warning">Middle</button>
                                                    <button type="button" class="btn btn-warning">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-warning btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-warning">1</button>
                                                    <button type="button" class="btn btn-warning">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.warning -->
                                        <!-- success -->
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-success">Top</button>
                                                    <button type="button" class="btn btn-success">Middle</button>
                                                    <button type="button" class="btn btn-success">Bottom</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-left'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-center'></i></button>
                                                    <button type="button" class="btn btn-success btn-flat"><i class='fa fa-align-right'></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group-vertical">
                                                    <button type="button" class="btn btn-success">1</button>
                                                    <button type="button" class="btn btn-success">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  <!-- /.success -->
                                    </table>
                                </div>
                            </div><!-- /.box -->                            

                        </div><!-- /.col -->
                    </div><!-- /. row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
    </body>
</html>