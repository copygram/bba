<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>List, Find and Get Blood Donors - Blood Bank Africa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        {{ HTML::style('css/lib/bootstrap.min.css') }}
        {{ HTML::style('css/backend.css') }}

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

       
        @yield('menu')

       <div class="container">

            @yield('content')

       </div> <!-- End of container div -->
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       {{ HTML::script('js/main.js') }}
    </body>
</html>