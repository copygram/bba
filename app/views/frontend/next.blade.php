@extends('frontend.base')

@section('content')
    <?php if(isset($registered)) : ?>
        @if ( $registered == true )
            <h1>Well thank you kind sir and or madam</h1>
        @endif
    <?php endif; ?>
@stop