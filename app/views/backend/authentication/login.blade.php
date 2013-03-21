<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Blood Bank Africa</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
   
</head>

<body>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
        <div class="logintitle"><a href="#">Blood Bank Africa </a></div>
    </div>
    
        
        @if(Session::has('flash_error'))
            <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif

        <div class="loginform">
            <?php echo Form::open('admin/login', 'POST'); ?>
                <div class="loginform_row">
                    <?php 
                        echo Form::label('username','Username');
                        echo Form::text('username', Input::old('username'), array('class'=>'loginform_input'));
                    ?>    
                </div>

                <div class="loginform_row">
                    <?php 
                        echo Form::label('password','Password');
                        echo Form::password('password',array('class'=>'loginform_input'));
                    ?> 
                </div>

                <div class="loginform_row">
                   <?php echo Form::submit('Login', array('class'=>'loginform_submit')); ?>
                </div> 
                <?php echo Form::close(); ?>
            <div class="clear"></div>
        </div>
  

</div>

    	
</body>
