@extends('BackEnd.default')
@section('header')
    <style type="text/css">
        #map_canvas { height: 600px; width: 100%;}
    </style>
@stop
@section('content')
    <h2>Donor search results</h2>
	@if($donors)
        <div id="map_canvas"></div>
    @else
		<h1>No donor found</h1>
		{{{ HTML::route('donorSearch','Back to search form') }}}
	@endif
@stop
@section('scripts')
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS7TbH7HgqB2kVU6gO_QJo2JcviDAoVys&sensor=false">
</script>
<script type="text/javascript">
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng({{ $hospital->lat }}, {{ $hospital->lng }}),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

        var donors =  {{$donors}};
        
        for (var key in donors) {
            var data = donors[key];
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.lat,data.lng),
                map: map,
                title: data.fname,
            });
            console.log(data.lat);
        }


    }
</script>
<script type="text/javascript">

    $(document).ready(function() {
        if ($('#map_canvas').length != 0) {
            initialize();
        }
    });
</script>
@stop