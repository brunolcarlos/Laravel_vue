@include('head')
<body>
    <div class="container">
        
        @include('top')
        
        @if(@$customer)

        @foreach ($customer as $user)
        <p>This is customer {{$user->name}}</p>
        <hr>
        @endforeach
        
        @else
        
        <p>Sorry, no data found</p>
        
        @endif
        
        
        
        @include('footer')
        