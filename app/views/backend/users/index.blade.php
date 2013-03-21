@extends('BackEnd.default')


@section('content')
    <h2>List of users</h2> 
                    
         <div class="form_sub_buttons">
            <?php echo HTML::to('admin/users/create','Add new user',array('class'=>'button green'));?>  
         </div> 

         <div class="header_right">
             <a href="#">Search</a>
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
                    <th>Edit</th>
                    <th>Deactivate</th>
                </tr>
            </thead>
                <tfoot>
                    <tr >
                        <td colspan="12"><?php echo $users->links();?></td>
                    </tr>
                </tfoot>
            <tbody>
                @if($users)

                    @foreach($users as $user)
                    <?php 
                         $role = Role::find($user->role);
                         
                    ?>
                        <tr class="odd">
                            <td><input type="checkbox" name="" /></td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td> {{ $role->name }}</td>
                            <td>{{ HTML::route('edit_user','Edit',array('id'=>$user->id)) }}</td>
                            <td>Deactivate</td>
                    

                        </tr>
                    @endforeach
                @else
                    <h1>No users in the database</h1>
            
                @endif
            </tbody>
        </table>
@stop