<!DOCTYPE html>
<html>
    <head>
        <title>Smart Compare</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        
        
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
