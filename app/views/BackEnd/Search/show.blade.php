@extends('BackEnd.default')

@section('content')
	<h2><?php echo $donor->fname .' '.$donor->lname ;?> details</h2>

	<div class="form">
		<?php echo Form::open('/','GET'); ?>

			<div class="form_row">
			<?php
				echo Form::label('fname','First name:');
				echo Form::text('fname',$donor->fname, array('class'=>'form_input','readonly'));
			?>
			</div>

			<div class="form_row">
			<?php
				echo Form::label('lname','Last name:');
				echo Form::text('lname',$donor->lname, array('class'=>'form_input','readonly'));
			?>
			</div>

			<div class="form_row">
			<?php
				echo Form::label('mobile','Mobile No:');
				echo Form::text('mobile',$donor->mobile, array('class'=>'form_input','readonly'));
			?>
			</div>

			<div class="form_row">
			<?php
				echo Form::label('email','Email:');
				echo Form::text('email',$donor->email, array('class'=>'form_input','readonly'));

			?>
			</div>

			<div class="form_row">
			<?php
				echo Form::label('bloodType','Blood type:');
				echo Form::text('bloodType',$donor->bloodtype, array('class'=>'form_input','readonly'));
			?>
			</div>

			<div class="form_row">
                <p>
                	<a href="javascript:history.back()" >Cancel</a>
                	{{ URL::route('smsDonor','Contact donor') }}
                </p>
	          	
	        </div> 


		<?php echo Form::close(); ?>

	</div>


@stop
