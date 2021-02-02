<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Template</title>
</head>
<body class="bg-secondary">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>