<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">--}}
<!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
</head>

<body>
<div class="container">
    @include('layouts.nav')

    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">
<div class="col-sm-8 blog-main">
    @yield('content')
</div>


        @include('layouts.sidebar')

    </div><!-- /.container -->


@include('layouts.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
