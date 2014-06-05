@extends('master')

@section('title')
Dashboard

@stop


@section('contents')
<div class="row">
    <!-- Welcome -->
    <div class="col-sm-12">
        <div class="alert alert-info">
            <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
            <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
        </div>
    </div>
    <!--end  Welcome -->
</div>


<div class="row">
    <!--quick info section -->
    <div class="col-sm-3">
        <div class="alert alert-danger text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert alert-success text-center">
            <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month
        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert alert-info text-center">
            <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert alert-warning text-center">
            <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
        </div>
    </div>
    <!--end quick info section -->
</div>

<div class="row">
    <div class="col-sm-8">



        <!--Area chart example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Area Chart Example
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>

        </div>
        <!--End area chart example -->
        <!--Simple table example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>3326</td>
                                    <td>10/21/2013</td>
                                    <td>3:29 PM</td>
                                    <td>$321.33</td>
                                </tr>
                                <tr>
                                    <td>3325</td>
                                    <td>10/21/2013</td>
                                    <td>3:20 PM</td>
                                    <td>$234.34</td>
                                </tr>
                                <tr>
                                    <td>3324</td>
                                    <td>10/21/2013</td>
                                    <td>3:03 PM</td>
                                    <td>$724.17</td>
                                </tr>
                                <tr>
                                    <td>3323</td>
                                    <td>10/21/2013</td>
                                    <td>3:00 PM</td>
                                    <td>$23.71</td>
                                </tr>
                                <tr>
                                    <td>3322</td>
                                    <td>10/21/2013</td>
                                    <td>2:49 PM</td>
                                    <td>$8345.23</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!--End simple table example -->


    </div>

    <div class="col-sm-4">
            <!-- Donut Example-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i>Donut Chart Example
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                    <a href="#" class="btn btn-default btn-block">View Details</a>
                </div>

            </div>
            <!--End Donut Example-->

        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa-pencil-square-o fa-3x"></i>
                <h3>Time Table</h3>
            </div>
            <div class="panel-footer">
                            <span class="panel-eyecandy-title">Time Table
                            </span>
            </div>
        </div>

        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body green">
                <i class="fa fa fa-gears fa-3x"></i>
                <h3>Buses Routine</h3>
            </div>
            <div class="panel-footer">
                            <span class="panel-eyecandy-title">Buses Routine
                            </span>
            </div>
        </div>
</div>

@stop