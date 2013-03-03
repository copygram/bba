/**
 * User: oskar@copygr.am
 * Date: 3/3/13
 * Time: 3:52 PM
 */
@extends('BackEnd.default')

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
									<td>{{{ HTML::route('view_donor','View details',array('id'=>$donor->id)) }}}</td>
								</tr>
							@endforeach

						</tbody>
				</table>
				<p>
					{{{ HTML::route('donorSearch','Back to search form') }}}
				</p>

	@else
		<h1>No donor found</h1>
		{{{ HTML::route('donorSearch','Back to search form') }}}
	@endif
@stop