<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div>Jonny <strong>Deen</strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!--end search section-->
            </li>
            <li class="">
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Reports<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris Charts</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('user') }}">Users</a>
                    </li>
                    <li>
                        <a href="typography.html">Schools & Fees</a>
                    </li>
                    <li>
                        <a href="buttons.html">Areas</a>
                    </li>
                    <li>
                        <a href="notifications.html">Cars</a>
                    </li>
                    <li>
                        <a href="{{url('driver')}}">Drivers</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-user fa-fw"></i>Student Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="selected">
                        <a href="blank.html"><i class="fa fa-plus-square-o"></i> Register</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-list-alt"></i> Manage</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>