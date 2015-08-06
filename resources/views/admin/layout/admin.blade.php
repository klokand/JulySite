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
	@include('admin.layout.nav')
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$pageName}}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
@include('admin.layout.feedback')
@yield('content')    
	</div>
 </div>

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CUSTOM SCRIPTS  -->
	<script src="/output/back.js"></script>
</body>
</html>
