<!DOCTYPE html>
<html>
<head>
    <title>Your App Title</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .mynav{
        position: fixed;
        margin: 0;
        width: 100%;
        z-index: 9999;
        top: 0; /* Add this line */
        left: 0; /* Add this line */
        right: 0; 
    }
    .container{
        margin-top: 100px;
    }
   
    
</style>

</head>
<body>
    <div class='mynav'>
        @include('layouts.navigation')
    </div>

    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>