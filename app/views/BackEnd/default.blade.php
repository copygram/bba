<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Blood Bank Africa</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.mini.css') }}" rel="stylesheet">
</head>

<body>
<div id="panelwrap">
    
    <div class="header">
        <div class="title"><a href="#">Blood Bank Africa</a></div>
        <?php $fullname = Auth::user()->fname .' '. Auth::user()->lname ;?>
        <div class="header_right"> <span id="welcome_notice">Welcome {{ ucwords($fullname) }},</span> 
            <a href="#" class="settings">Settings</a> <?php echo HTML::to('admin/logout','Logout',array('class'=>'logout'));?>    
        </div>
    </div>
             
                    
    <div class="center_content">  
 
        <div id="right_wrap">
            <div id="right_content">            
                @yield('content')

             </div>
        </div>
        
        @include('BackEnd.navbar')           
      
        <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <footer class="footer">
        &copy; Blood Bank Africa {{ date('Y')}}
    </footer>

</div> <!--end of panelwrap -->

    <!-- Javascripts
        ================================================== -->
        <script src="{{ asset('assets/js/jquery.v1.8.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-2.2.2/bootstrap.min.js') }}"></script>       
</body>
</html>
