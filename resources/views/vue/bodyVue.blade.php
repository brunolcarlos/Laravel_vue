@if(@$customer)
<table class="table table-striped">
    <thead>
        <tr>
            <th><a href="#">ID</a></th>
            <th><a href="#">Name</a></th>
            <th><a href="#">Email</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($customer as $user)
            <tr class="striped">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
    @else
    
    <p>Sorry, no data found</p>
    
    @endif
    
    