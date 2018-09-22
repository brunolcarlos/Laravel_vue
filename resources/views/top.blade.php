<div class="container navs">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{asset('/')}}">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-link active" href="{{asset('/')}}">Home<span class="sr-only">(current)</span></a> -->
                <a class="nav-link" href="{{asset('/users_laravel')}}">With Laraval</a>
                <a class="nav-link" href="{{asset('/users_jquery')}}">With Jquery</a>
                <a class="nav-link" href="{{asset('/users_vue')}}">With VueJS</a>
            </div>
        </div>
    </nav>
</div>