<!DOCTYPE html>
<html>
    <head>
        <title>Epro 360</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/site/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/site/resources/fontello/fontello.css">
        <link rel="stylesheet" href="/site/css/animation.css">
        <link href="/site/includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/site/vendors/MEplayer/mediaelementplayer.min.css" rel="stylesheet"/>
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="/site/vendors/rs-plugin/css/settings.css" media="screen"/>
        <link href="/site/vendors/smoothdivscroll/smoothDivScroll.css" rel="stylesheet">
        <link rel="stylesheet" href="/site/vendors/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="/site/css/aspect.css">
        <link rel="stylesheet" href="/site/css/style.css">
        <link rel="stylesheet" href="/site/css/responsive.css">
        <script type="text/javascript" src="/site/includes/modernizr/modernizr.custom.27667.js"></script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/site/includes/html5shiv/html5shiv.js"></script>
        <script type="text/javascript" src="/site/includes/respond/respond.min.js"></script>
        <![endif]-->
        <link rel="icon" type="image/png" href="/site/favicon.png">
    </head>
    <body data-spy="scroll" data-target="#section-nav">
        <div id="main">
                <!-- Include advertising -->
            <header class="head-1">
                @include('site.layouts.partials.header.top-bar')    
                @include('site.layouts.partials.header.nav-bar')    
                
            </header>

<!--            @include('site.layouts.partials.components.nav-shop')    -->

            @include('site.layouts.partials.components.search')    

            @include('site.layouts.partials.components.slider')    

            @include('site.layouts.partials.components.description')  

            @include('site.layouts.partials.components.work')    

            @include('site.layouts.partials.components.features')    

<!--            @include('site.layouts.partials.components.testimonials-3')  -->

            @include('site.layouts.partials.components.feature-cards')    

            @include('site.layouts.partials.components.partners')    
  
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
            <!-- jQuery REVOLUTION Slider  -->
            <script type="text/javascript" src="/site/vendors/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
            <script type="text/javascript" src="/site/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="/site/js/script.js"></script>
            <script type="text/javascript" src="/site/includes/retina/retina-1.1.0.min.js"></script>
            <!--[if gte IE 9]>
            <script type="text/javascript" src="/site/js/ie9.js"></script>
            <![endif]-->
        </div>
    </body>
</html>