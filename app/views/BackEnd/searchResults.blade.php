@extends('BackEnd.base')


@section('content')
<div class="container">
    <div class="row" style="padding-top:60px;">

	<a href="{{ route('donorSearchOnMap') }}">View on map</a> 
	
	@if($results)
			
		<table>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Gender</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Blood type</th>
			</tr>
			<tbody>
							
				@foreach($results as $donor)
								<tr class="odd">
						<td>{{ $donor->fname }}</td>
						<td>{{ $donor->lname }}</td>
						<td>{{ $donor->gender }}</td>
						<td>{{ $donor->mobile }}</td>
						<td>{{ $donor->email }}</td>
						<td>{{ $donor->bloodtype }}</td>
					</tr>
				@endforeach
							
			</tbody>
		</table>
		<p>
			<a href="{{ URL::route('donorSearch') }}">Back</a>
		</p>

	@else
		No donor found <br/>
		<a href="{{URL::route('donorSearch')}}">Back</a>
	@endif

</div>
</div>
@stop