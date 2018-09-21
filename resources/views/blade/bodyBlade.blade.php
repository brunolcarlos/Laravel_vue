<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @if(@$customer)
            
            @foreach ($customer as $user)
            <tr class="striped">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
            
            @else
            
            <p>Sorry, no data found</p>
            
            @endif
            
        </tbody>
    </table>
    
    