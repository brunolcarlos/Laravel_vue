<div class="form_register">
    <h1>Register a new User</h1>
    <hr>
    <form action="/foo/bar" method="POST">
        <!-- csrf_token -->
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- csrf_token -->
        
        <div class="row">
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="name">Name</label>
                <input type="text" class="form form-control" id="name">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="email">Email</label>
                <input type="text" class="form form-control" id="email">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                <label for="password">Password</label>
                <input type="password" class="form form-control" id="password">
            </div>
            <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                <br>
                <button class="btn btn-primary">Register</button>
            </div>
            
        </div>
    </form>
</div>