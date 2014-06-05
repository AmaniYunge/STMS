<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shool Information System</title>
    <!-- Core CSS - Include with every page -->
    {{ HTML::style("assets/plugins/bootstrap/bootstrap.css") }}
    {{ HTML::style("assets/font-awesome/css/font-awesome.css") }}
    {{ HTML::style("assets/plugins/pace/pace-theme-big-counter.css") }}
    {{ HTML::style("assets/css/style.css") }}
    {{ HTML::style("assets/css/main-style.css") }}

</head>

<body>
<!--  wrapper -->
<div id="wrapper">
<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
<!-- navbar-header -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">
       <h2 style="color: #f5f5f5">School Transport Management System-STMS</h2>
    </a>
</div>
<!-- end navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right">
<!-- main dropdown -->

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
    </a>
    <!-- dropdown alerts-->
    <ul class="dropdown-menu dropdown-alerts">
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-comment fa-fw"></i>New Comment
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                    <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-tasks fa-fw"></i>New Task
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                    <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- end dropdown-alerts -->
</li>

<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-3x"></i>
    </a>
    <!-- dropdown user-->
    <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
        </li>
    </ul>
    <!-- end dropdown-user -->
</li>
<!-- end main dropdown -->
</ul>
<!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->

<!-- navbar side -->
@include('left')
<!-- end navbar side -->
<!--  page-wrapper -->
<div id="page-wrapper">

    <div class="row">
        <!-- Page Header -->
        <div class="col-sm-12">
            <h1 class="page-header">@yield('title')</h1>
        </div>
        <!--End Page Header -->
        <div class="col-sm-12">
            @yield('contents')
        </div>
    </div>



</div>
<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
{{ HTML::script("assets/plugins/jquery-1.10.2.js") }}
{{ HTML::script("assets/plugins/bootstrap/bootstrap.min.js") }}
{{ HTML::script("assets/plugins/metisMenu/jquery.metisMenu.js") }}
{{ HTML::script("assets/plugins/pace/pace.js") }}
{{ HTML::script("assets/plugins/morris/morris.js") }}
{{ HTML::script("assets/plugins/morris/raphael-2.1.0.min.js") }}
{{ HTML::script("assets/scripts/siminta.js") }}
{{ HTML::script("assets/scripts/dashboard-demo.js") }}

</body>

</html>
