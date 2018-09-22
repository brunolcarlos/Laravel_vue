@if(session('success'))
<p class="alert alert-info">{{ session('success') }}</p>
@endif


<div class="form_register">
    <h1>Register a new User</h1>
    <hr>
    <form action="http://www.localhost/Laravel_vue/users_laravel" method="POST">
        <!-- csrf_token -->
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- csrf_token -->
        
        <div class="row">
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form form-control" id="name">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="email">Email</label>
                <input type="text" name="email" class="form form-control" id="email">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form form-control" id="password">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                <br>
                <button class="btn btn-primary">Register</button>
            </div>
            
        </div>
    </form>
</div>