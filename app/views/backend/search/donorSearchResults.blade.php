@extends('backend.default')

@section('content')
<h2>Donor search results</h2>
	@if($results)
			<br/>
			<br/>

			<table class="table" id="rounded-corner">
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Gender</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Blood type</th>
							<th>View details</th>
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
									<td><a href="{{URL::route('view_donor',array('id'=>$donor->id))}}">View donor</a></td>
								</tr>
							@endforeach
							
						</tbody>
				</table>
				<p>
					<a href="{{ URL::route('donorSearch') }}">Back to search form</a>
				</p>

	@else
		<h1>No donor found</h1><a href="{{URL::route('donorSearch')}}">Back to search form</a>
	@endif
@stop