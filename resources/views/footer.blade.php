
<div class="footer">
    
    <center>
        <a href="https://github.com/brunolcarlos/Laravel_vue" target="_blank">
            <i style="font-size:50px" class="fab fa-github"></i> 
        </a>
        <br><hr>
        <small class="align align-center">My Laravel Project with VueJS</small>
    </center>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {
            ajax: {
                url: '/Laravel_vue/get_users',
                crossDomain : true,
                format: 'json',
                jsonCompat: 'new',
                dataSrc: ''
            },
            columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'email' }
            ]
        } );
    } );
</script>
</body>
</html>
