@include('head')
<body>
    
    @include('top')
    <div class="container">
        
        @include('forms')     
        @if(@$customer)
        
        @include('blade.bodyBlade')    
        
        @else
        
        <p>Sorry, no data found</p>
        
        @endif
        
        
        
        @include('footer')
        