<!DOCTYPE html>
<html>
    <head>
        <title>Epro 360</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/site/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/site/resources/fontello/fontello.css"rel="stylesheet" >
        <link href="/site/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/site/vendors/MEplayer/mediaelementplayer.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/site/vendors/animate/animate.min.css">

        @yield('styles')

        <link rel="stylesheet" href="/site/css/aspect.css">
        <link rel="stylesheet" href="/site/css/style.css">
        <link rel="stylesheet" href="/site/css/responsive.css">
        <link rel="stylesheet" href="/site/css/lang-flags.css">


        <script type="text/javascript" src="/site/includes/modernizr/modernizr.custom.27667.js"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/site/includes/html5shiv/html5shiv.js"></script>
        <script type="text/javascript" src="/site/includes/respond/respond.min.js"></script>
        <![endif]-->
        @yield('top-scripts')
        <link rel="icon" type="image/png" href="/site/favicon.ico">
    </head>
    <body data-spy="scroll" data-target="#section-nav">
        <div id="main">
                <!-- Include advertising -->
            <header class="head-1">
                @include('dashboard.partials.messages')
                @include('site.layouts.partials.header.top-bar')
                @include('site.layouts.partials.header.nav-bar')
            </header>
            @if( ! Request::is('login') or Auth::guest() )
                @include('site.layouts.partials.components.login')
            @endif
            @yield('content')
            <footer>
                @include('site.layouts.partials.footer.content')    
                @include('site.layouts.partials.footer.bottom')    
            </footer>
            <a href="#navigation">
            <div id="totop" class="collapsed">
                <i class="fa fa-chevron-up"></i>
            </div>
            </a>
            <script type="text/javascript" src="/site/vendors/jquery/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="/site/vendors/jquery/jquery-ui-1.10.4.min.js"></script>
            <script type="text/javascript" src="/site/vendors/caroufredsel-6.2.1/jquery.carouFredSel-6.2.1-packed.js"></script>
            <script type="text/javascript" src="/site/includes/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/site/vendors/scrollto/jquery.scrollTo-min.js"></script>
            <script type="text/javascript" src="/site/vendors/isotope/jquery.isotope.min.js"></script>
            <script type="text/javascript" src="/site/vendors/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
            <script type="text/javascript" src="/site/vendors/cycle/jquery.cycle.all.min.js"></script>
            <script type="text/javascript" src="/site/vendors/mixitup-1.5.5/src/jquery.mixitup.js"></script>
            <script type="text/javascript" src="/site/includes/hoverintent/jquery.hoverIntent.min.js"></script>
            <script type="text/javascript" src="/site/vendors/imagesloaded/imagesloaded.min.js"></script>
            <script type="text/javascript" src="/site/vendors/smoothdivscroll/jquery.smoothdivscroll-1.3-min.js"></script>
            <script type="text/javascript" src="/site/vendors/stellar/jquery.stellar.min.js"></script>
            <script type="text/javascript" src="/site/vendors/MEplayer/mediaelement-and-player.min.js"></script>
            <script type="text/javascript" src="/site/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src="/site/vendors/caroufredsel-6.2.1/jquery.carouFredSel-6.2.1-packed.js"></script>
            <script src="/site/vendors/wow/wow.min.js"></script>
            <script> $(document).ready(function(){ new WOW().init(); }); </script>
            @yield('scripts')
            <script src="/site/js/script.js"></script>
            <script src="/site/includes/retina/retina-1.1.0.min.js"></script>
            <!--[if gte IE 9]>
            <script type="text/javascript" src="/site/js/ie9.js"></script>
            <![endif]-->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                ga('create', 'UA-52370723-1', 'auto');
                ga('require', 'displayfeatures');
                ga('send', 'pageview');

            </script>
        </div>
    </body>
</html>