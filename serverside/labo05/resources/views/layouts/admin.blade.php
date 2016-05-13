<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8" />
    <meta http-equiv="cleartype" content="on" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('admin_assets/css/bootstrap.min.css') }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery & Bootstrap -->
    <script src="{{ @url('/admin_assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ @url('/admin_assets/js/bootstrap.min.js') }}"></script>

    @yield('JS')

</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ @url('/admin') }}">Blogger // CMS</a>
        </div>

        <!-- content // User is logged in: show nagivation  -->
        @if (Auth::check())
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ @url('/admin') }}">Blogposts</a></li>
                    <li><a href="#">Comments</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ @url('/logout') }}">Logout ({{ Auth::user()->firstname }} {{ Auth::user()->lastname }})</a></li>
                </ul>
            </div>
            @else
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ @url('/login') }}">Log in</a></li>
                </ul>
            </div>
        @endif
    </div>
</div>

<div class="container">
    <h1>@yield('title')</h1>

    @yield('content')

</div>

</body>
</html>