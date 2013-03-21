@extends('backend.default')

@section('content')
	<h2>Send SMS to donor </h2>

	<div class="form">
		<?php echo Form::open('admin/donors/search/sms','POST'); ?>

			<div class="form_row">
			<?php
				echo Form::label('mobile','Mobile No:');
				echo Form::text('mobile', ' ', array('class'=>'form_input'));
			?>
			</div>

			<div class="form_row">
			<?php
				echo Form::label('Message','Message:');
				echo Form::textarea('message',' ', array('class'=>'form_input'));
			?>
			</div>


			<div class="form_row">
                <p>
                	<a href="javascript:history.back()" >Cancel</a>
                	<?php echo Form::submit('Send', array('class'=>'form_submit')); ?>
                </p>
	          	
	        </div> 


		<?php echo Form::close(); ?>

	</div>

@stop