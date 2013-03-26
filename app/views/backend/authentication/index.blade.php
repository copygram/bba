@extends('BackEnd.default')


@section('content')
    <h2>List of users</h2> 
                    
         <div class="form_sub_buttons">
                <a href="#" class="button green">Add New</a>
         </div>  

        <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Mobile</th>
                    <th>Type</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
                <tfoot>
                    <tr>
                        <td colspan="12">Pagination goes here</td>
                    </tr>
                </tfoot>
            <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr class="odd">
                            <td><input type="checkbox" name="" /></td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->role }}</td>
                            <td><a href="#"><img src="{{ asset('assets/images/view.png') }}" alt="" title="" border="0" /></a></td>
                            <td><a href="#"><img src="{{ asset('assets/images/edit.png') }}" alt="" title="" border="0" /></a></td>
                            <td><a href="#"><img src="{{ asset('assets/images/trash.gif') }}" alt="" title="" border="0" /></a></td>

                        </tr>
                    @endforeach
                @else
                    <h1>No users in the database</h1>
            
                @endif
            </tbody>
        </table>
@stop