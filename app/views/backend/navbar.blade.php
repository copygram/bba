<div class="sidebar" id="sidebar">
        <h2>Dashboard</h2>
            <ul>
                <li><a href="{{ URL::route('home') }}">Dashboard</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        <h2>Donor section</h2>
            <ul>
                <li><a href="{{ URL::route('donorSearch') }}">Search Donor</a></li>
                <li><a href="#" >New donor</a></li>
                <li><a href="#">List of donors</a></li>
                <li><a href="{{ URL::route('donorSearchOnMap') }}">View on map</a></li>
            </ul>
        <h2>User Settings</h2>
            <ul>
                <li><a href="{{ URL::route('users') }}">List of users</a></li>
                <li><a href="{{ URL::route('new_user') }}">Add new user</a></li>
                <li><a href="#">Manage users</a></li>
                <li><a href="#">Help </a></li>
            </ul>
</div>  <!-- end of sidebar-->
    