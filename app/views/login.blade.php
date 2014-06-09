<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    {{ HTML::style("assets/plugins/bootstrap/bootstrap.css") }}
    {{ HTML::style("assets/font-awesome/css/font-awesome.css") }}
    {{ HTML::style("assets/plugins/pace/pace-theme-big-counter.css") }}
    {{ HTML::style("assets/css/style.css") }}
    {{ HTML::style("assets/css/main-style.css") }}

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div style="color: #f5f5f5" class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <h2 >STMS</h2>
            <small>School Transport Management System</small>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    @if(isset($error))
                    <div class="alert alert-danger alert-dismissable" style="padding: 5px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ $error }}!</strong>
                    </div>
                    @endif
                    <form role="form" method="post" action="{{ url('login')}}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="keep" type="checkbox" value="keep">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
{{ HTML::script("assets/plugins/jquery-1.10.2.js") }}
{{ HTML::script("assets/plugins/bootstrap/bootstrap.min.js") }}
{{ HTML::script("assets/plugins/metisMenu/jquery.metisMenu.js") }}
<script src="assets/plugins/jquery-1.10.2.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>