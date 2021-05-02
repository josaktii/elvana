<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../images/favicon.ico">

  <title>Fab Admin - Dashboard Morris Charts </title>

  <link rel="stylesheet" href="../style/bootstrap.min.css">

<link rel="stylesheet" href="../style/bootstrap-extend.css">

<link rel="stylesheet" href="../style/master_style.css">

<link rel="stylesheet" href="../style/_all-skins.css">
<link rel="stylesheet" href="../assets/morris.js/morris.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index.html" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
          <span class="light-logo"><img src="../../../images/logo-light.png" alt="logo"></span>
          <span class="dark-logo"><img src="../../../images/logo-dark.png" alt="logo"></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
          <img src="../../../images/logo-light-text.png" alt="logo" class="light-logo">
          <img src="../../../images/logo-dark-text.png" alt="logo" class="dark-logo">
        </span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="btn-group d-none d-lg-inline-block mt-5">
            <button class="btn dropdown-toggle mr-10 btn-outline btn-white" type="button"
              data-toggle="dropdown">Dashboard</button>
            <div class="dropdown-menu">
              <a class="dropdown-item"
                href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/src/"><i
                  class="fa fa-dashboard w-30"></i>Main Dashboard</a>
              <a class="dropdown-item"
                href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/ecommerce-dashboard/"><i
                  class="fa fa-shopping-basket w-30"></i>eCommerce Dashboard</a>
              <a class="dropdown-item"
                href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/hospital-dashboard/"><i
                  class="fa fa-heartbeat w-30"></i>Hospital Dashboard</a>
              <a class="dropdown-item"
                href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/horizontal-nav/main"><i
                  class="fa fa-bars w-30"></i>Horizontal Nav Dashboard</a>
              <a class="dropdown-item"
                href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/horizontal-nav/real-estate-dashboard"><i
                  class="fa fa-building w-30"></i>Real Estate Dashboard</a>
            </div>
          </div>
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="search-box">
              <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
              <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i
                    class="ti-close"></i></a>
              </form>
            </li>

            <!-- Messages -->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="mdi mdi-email"></i>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">You have 5 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content-div">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                          <h4>
                            Lorem Ipsum
                            <small><i class="fa fa-clock-o"></i> 15 mins</small>
                          </h4>
                          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                          <h4>
                            Nullam tempor
                            <small><i class="fa fa-clock-o"></i> 4 hours</small>
                          </h4>
                          <span>Curabitur facilisis erat quis metus congue viverra.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                          <h4>
                            Proin venenatis
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                          <h4>
                            Praesent suscipit
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="../../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                        </div>
                        <div class="mail-contnet">
                          <h4>
                            Donec tempor
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See all e-Mails</a></li>
              </ul>
            </li>
            <!-- Notifications -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">You have 7 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content-div">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper
                        diam posuere.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a
                        erat.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum
                        imperdiet.
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks-->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="mdi mdi-message"></i>
              </a>
              <ul class="dropdown-menu scale-up">
                <li class="header">You have 6 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu inner-content-div">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Lorem ipsum dolor sit amet
                          <small class="pull-right">30%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">30% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Vestibulum nec ligula
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Donec id leo ut ipsum
                          <small class="pull-right">70%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">70% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Praesent vitae tellus
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Nam varius sapien
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Nunc fringilla
                          <small class="pull-right">90%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">90% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account-->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
              </a>
              <ul class="dropdown-menu scale-up">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                  <p>
                    Juliya Brus
                    <small class="mb-5">jb@gmail.com</small>
                    <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row no-gutters">
                    <div class="col-12 text-left">
                      <a href="#"><i class="ion ion-person"></i> My Profile</a>
                    </div>
                    <div class="col-12 text-left">
                      <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                    </div>
                    <div class="col-12 text-left">
                      <a href="#"><i class="ion ion-settings"></i> Setting</a>
                    </div>
                    <div role="separator" class="divider col-12"></div>
                    <div class="col-12 text-left">
                      <a href="#"><i class="ti-settings"></i> Account Setting</a>
                    </div>
                    <div role="separator" class="divider col-12"></div>
                    <div class="col-12 text-left">
                      <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="user-profile treeview">
            <a href="index.html">
              <img src="../../../images/user5-128x128.jpg" alt="user">
              <span>Juliya Brus</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
              <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
              <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
              <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
              <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
            </ul>
          </li>
          <li class="header nav-small-cap">PERSONAL</li>
          <li>
            <a href="../../index.html">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i>
              <span>App</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../app/app-chat.html"><i class="fa fa-circle-thin"></i>Chat app</a></li>
              <li><a href="../app/app-contact.html"><i class="fa fa-circle-thin"></i>Contact / Employee</a></li>
              <li><a href="../app/app-ticket.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>
              <li><a href="../app/calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>
              <li><a href="../app/profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>
              <li><a href="../app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>
              <li><a href="../app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope"></i> <span>Mailbox</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../mailbox/mailbox.html"><i class="fa fa-circle-thin"></i>Inbox</a></li>
              <li><a href="../mailbox/compose.html"><i class="fa fa-circle-thin"></i>Compose</a></li>
              <li><a href="../mailbox/read-mail.html"><i class="fa fa-circle-thin"></i>Read</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>UI Elements</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../UI/badges.html"><i class="fa fa-circle-thin"></i>Badges</a></li>
              <li><a href="../UI/border-utilities.html"><i class="fa fa-circle-thin"></i>Border</a></li>
              <li><a href="../UI/buttons.html"><i class="fa fa-circle-thin"></i>Buttons</a></li>
              <li><a href="../UI/bootstrap-switch.html"><i class="fa fa-circle-thin"></i>Bootstrap Switch</a></li>
              <li><a href="../UI/cards.html"><i class="fa fa-circle-thin"></i>User Card</a></li>
              <li><a href="../UI/color-utilities.html"><i class="fa fa-circle-thin"></i>Color</a></li>
              <li><a href="../UI/date-paginator.html"><i class="fa fa-circle-thin"></i>Date Paginator</a></li>
              <li><a href="../UI/dropdown.html"><i class="fa fa-circle-thin"></i>Dropdown</a></li>
              <li><a href="../UI/dropdown-grid.html"><i class="fa fa-circle-thin"></i>Dropdown Grid</a></li>
              <li><a href="../UI/general.html"><i class="fa fa-circle-thin"></i>General</a></li>
              <li><a href="../UI/icons.html"><i class="fa fa-circle-thin"></i>Icons</a></li>
              <li><a href="../UI/media-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Medias</a></li>
              <li><a href="../UI/modals.html"><i class="fa fa-circle-thin"></i>Modals</a></li>
              <li><a href="../UI/nestable.html"><i class="fa fa-circle-thin"></i>Nestable</a></li>
              <li><a href="../UI/notification.html"><i class="fa fa-circle-thin"></i>Notification</a></li>
              <li><a href="../UI/portlet-draggable.html"><i class="fa fa-circle-thin"></i>Draggable Portlets</a></li>
              <li><a href="../UI/ribbons.html"><i class="fa fa-circle-thin"></i>Ribbons</a></li>
              <li><a href="../UI/sliders.html"><i class="fa fa-circle-thin"></i>Sliders</a></li>
              <li><a href="../UI/sweatalert.html"><i class="fa fa-circle-thin"></i>Sweet Alert</a></li>
              <li><a href="../UI/tab.html"><i class="fa fa-circle-thin"></i>Tabs</a></li>
              <li><a href="../UI/timeline.html"><i class="fa fa-circle-thin"></i>Timeline</a></li>
              <li><a href="../UI/timeline-horizontal.html"><i class="fa fa-circle-thin"></i>Horizontal Timeline</a></li>
            </ul>
          </li>
          <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-bars"></i>
              <span>Widgets</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../widgets/blog.html"><i class="fa fa-circle-thin"></i>Blog</a></li>
              <li><a href="../widgets/chart.html"><i class="fa fa-circle-thin"></i>Chart</a></li>
              <li><a href="../widgets/list.html"><i class="fa fa-circle-thin"></i>List</a></li>
              <li><a href="../widgets/social.html"><i class="fa fa-circle-thin"></i>Social</a></li>
              <li><a href="../widgets/statistic.html"><i class="fa fa-circle-thin"></i>Statistic</a></li>
              <li><a href="../widgets/weather.html"><i class="fa fa-circle-thin"></i>Weather</a></li>
              <li><a href="../widgets/widgets.html"><i class="fa fa-circle-thin"></i>Widgets</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Layout Options</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../layout/boxed.html"><i class="fa fa-circle-thin"></i>Boxed</a></li>
              <li><a href="../layout/fixed.html"><i class="fa fa-circle-thin"></i>Fixed</a></li>
              <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-thin"></i>Collapsed Sidebar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-square-o"></i>
              <span>Box</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../box/advanced.html"><i class="fa fa-circle-thin"></i>Advanced</a></li>
              <li><a href="../box/basic.html"><i class="fa fa-circle-thin"></i>Basic</a></li>
              <li><a href="../box/color.html"><i class="fa fa-circle-thin"></i>Color</a></li>
              <li><a href="../box/group.html"><i class="fa fa-circle-thin"></i>Group</a></li>
            </ul>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="chartjs.html"><i class="fa fa-circle-thin"></i>ChartJS</a></li>
              <li><a href="flot.html"><i class="fa fa-circle-thin"></i>Flot</a></li>
              <li><a href="inline.html"><i class="fa fa-circle-thin"></i>Inline charts</a></li>
              <li class="active"><a href="morris.html"><i class="fa fa-circle-thin"></i>Morris</a></li>
              <li><a href="peity.html"><i class="fa fa-circle-thin"></i>Peity</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../forms/advanced.html"><i class="fa fa-circle-thin"></i>Advanced Elements</a></li>
              <li><a href="../forms/code-editor.html"><i class="fa fa-circle-thin"></i>Code Editor</a></li>
              <li><a href="../forms/editor-markdown.html"><i class="fa fa-circle-thin"></i>Markdown</a></li>
              <li><a href="../forms/editors.html"><i class="fa fa-circle-thin"></i>Editors</a></li>
              <li><a href="../forms/form-validation.html"><i class="fa fa-circle-thin"></i>Form Validation</a></li>
              <li><a href="../forms/form-wizard.html"><i class="fa fa-circle-thin"></i>Form Wizard</a></li>
              <li><a href="../forms/general.html"><i class="fa fa-circle-thin"></i>General Elements</a></li>
              <li><a href="../forms/mask.html"><i class="fa fa-circle-thin"></i>Formatter</a></li>
              <li><a href="../forms/xeditable.html"><i class="fa fa-circle-thin"></i>Xeditable Editor</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../tables/simple.html"><i class="fa fa-circle-thin"></i>Simple tables</a></li>
              <li><a href="../tables/data.html"><i class="fa fa-circle-thin"></i>Data tables</a></li>
              <li><a href="../tables/editable-tables.html"><i class="fa fa-circle-thin"></i>Editable Tables</a></li>
              <li><a href="../tables/table-color.html"><i class="fa fa-circle-thin"></i>Table Color</a></li>
            </ul>
          </li>
          <li>
            <a href="../email/index.html">
              <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <li class="header nav-small-cap">EXTRA COMPONENTS</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-map"></i> <span>Map</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../map/map-google.html"><i class="fa fa-circle-thin"></i>Google Map</a></li>
              <li><a href="../map/map-vector.html"><i class="fa fa-circle-thin"></i>Vector Map</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-plug"></i> <span>Extension</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../extension/fullscreen.html"><i class="fa fa-circle-thin"></i>Fullscreen</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Sample Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../samplepage/blank.html"><i class="fa fa-circle-thin"></i>Blank</a></li>
              <li><a href="../samplepage/coming-soon.html"><i class="fa fa-circle-thin"></i>Coming Soon</a></li>
              <li><a href="../samplepage/custom-scroll.html"><i class="fa fa-circle-thin"></i>Custom Scrolls</a></li>
              <li><a href="../samplepage/faq.html"><i class="fa fa-circle-thin"></i>FAQ</a></li>
              <li><a href="../samplepage/gallery.html"><i class="fa fa-circle-thin"></i>Gallery</a></li>
              <li><a href="../samplepage/invoice.html"><i class="fa fa-circle-thin"></i>Invoice</a></li>
              <li><a href="../samplepage/lightbox.html"><i class="fa fa-circle-thin"></i>Lightbox Popup</a></li>
              <li><a href="../samplepage/pace.html"><i class="fa fa-circle-thin"></i>Pace</a></li>
              <li><a href="../samplepage/pricing.html"><i class="fa fa-circle-thin"></i>Pricing</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-thin"></i>Authentication
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../samplepage/login.html"><i class="fa fa-circle"></i>Login</a></li>
                  <li><a href="../samplepage/register.html"><i class="fa fa-circle"></i>Register</a></li>
                  <li><a href="../samplepage/lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>
                  <li><a href="../samplepage/user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-thin"></i>Error Pages
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../samplepage/404.html"><i class="fa fa-circle"></i>404</a></li>
                  <li><a href="../samplepage/500.html"><i class="fa fa-circle"></i>500</a></li>
                  <li><a href="../samplepage/maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Level One</a></li>
              <li class="treeview">
                <a href="#">Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#">Level Two</a></li>
                  <li class="treeview">
                    <a href="#">Level Two
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#">Level Three</a></li>
                      <li><a href="#">Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Level One</a></li>
            </ul>
          </li>

        </ul>
      </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Morris Charts
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Charts</a></li>
          <li class="breadcrumb-item active">Morris</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">

          <div class="col-12 col-lg-6">
            <!-- LINE CHART -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Analatics</h3>

                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
              </div>
              <div class="box-body chart-responsive">
                <div class="chart" id="line-chart" style="height: 300px;"></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>


        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Purchase Now</a>
          </li>
        </ul>
      </div>
      &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <script src="../js/jquery.min.js"></script>

<script src="../js/popper.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

<script src="../js/fastclick.js"></script>

<script src="../js/template.js"></script>

<script src="../assets/raphael/raphael.min.js"></script>
<script src="../assets/morris.js/morris.min.js"></script>
<script src="../js/widget-morris-charts.js"></script>


</body>

</html>