<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Luck Country Property Investments</title>
    <!-- CUSTOM STYLE CSS -->
    <link href="/output/back.css" rel="stylesheet" />
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body >
<div id="wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                       {!!Form::open(['url'=>'admin/login','method'=>'post','form role'=>'form'])!!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								{!!Form::submit('Login!',['class'=>'btn btn-lg btn-success btn-block'])!!}
                            </fieldset>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CUSTOM SCRIPTS  -->
	<script src="/output/back.js"></script>
</body>
</html>