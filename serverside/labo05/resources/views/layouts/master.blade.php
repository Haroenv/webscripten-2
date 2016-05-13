<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="oldie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="oldie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="oldie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8" />
    <meta http-equiv="cleartype" content="on" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" media="screen" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('/css/screen.css') }}" />

    @yield('CSS')

</head>
<body>

<div id="siteWrapper">

    <header role="banner">
        <h1><a href="{{ url('/') }}/">&#9993; My Blog!</a></h1>
        <nav>
            <ul>
                <li><a href="{{ @url('/') }}"> &#127968; Home</a></li>
                <li><a href="{{ @url('/authors') }}"> &#128366; Authors</a></li>
                <li><a href="{{ @url('/blogposts/search') }}"> &#128269; Search</a></li>
                <li><a href="{{ @url('/admin') }}"> &#9773; Admin</a></li>
            </ul>
        </nav>
    </header>

    <!-- content -->
    <section role="main">

        @yield('content')

    </section>

</div>

<footer role="contentinfo">&copy; 2016 &mdash; Ikdoeict.be</footer>

</body>
</html>