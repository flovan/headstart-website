<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	
    	<!-- SEO -->
    	
        <title>Headstart</title>
        <meta name="description" content="An easy-to-use automated front-end setup.">
        <meta name="keywords" content="front-end, frontend, framework, boilerplate, gulp, sass, scss, livereload, development, css, html, javascript, js, jquery, automate, optimize">
        <meta name="author" content="Florian Vanthuyne">

        <!-- Spiders must use meta description -->

        <meta name="robots" content="noodp, noydir">

        <!-- No Google Translate toolbar -->

        <meta name="google" content="notranslate">
        
        <!-- Viewport and mobile -->
        
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0, minimal-ui">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="cleartype" content="on">

        <!-- Icons -->
        
        <link rel="icon" href="assets/images/icons/favicon.png">
        <meta property="og:image" content="assets/images/icons/fb-600x400.jpg" />
        <link rel="image_src" href="assets/images/icons/fb-600x400.jpg" />

        <!-- Stylesheets -->

        @include('top-inject')

        <!--[if lt IE 9]><script src="{{URL::to('/')}}/assets/js/ie.head.min.js"></script><![endif]-->

        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-19595931-9']);
            _gaq.push(['_trackPageview']);
        </script>
	</head>  
	<body id="main">
        <div id="fb-root"></div>
        
        <aside class="sidebar" id="sidebar">
            <div class="sidebar__wrapper wrapper">
                <div class="sidebar__logo-wrapper">
                    <a class="logo sidebar__logo" href="{{URL::to('/')}}"><span class="is-hidden">Headstart</span></a>
                    <a href="{{URL::to('/')}}/changelog" class="sidebar__version">v1.2.3</a>
                </div>
                @include('partials.main-menu')
            </div>
        </aside>
        @include('partials.sub-menu')
        <section class="content" id="content">
            <div class="content-overlay"></div>
            @yield('content', array('view'=>$view))
            @include('partials.footer')
        </section>
        
        @include('bottom-inject')

        <!--[if lt IE 9]><script src="{{URL::to('/')}}/assets/js/ie.body.min.js"></script><![endif]-->
        <script>

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        </body>
    </html>