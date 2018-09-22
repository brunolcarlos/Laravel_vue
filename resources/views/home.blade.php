@include('head')
<body>
    <div class="container">
        
        @include('top')
        @include('forms')     
        @if(@$customer)
        
        @include('blade.bodyBlade')    
        
        @else
        
        <p>Sorry, no data found</p>
        
        @endif
        
        
        
        @include('footer')
        