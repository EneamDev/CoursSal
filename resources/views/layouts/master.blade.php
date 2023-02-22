<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    @vite('resources/css/app.css')
    
</head>

<body>
    <div class="w-screen h-screen flex justify-center items-center mx-auto">

        @yield('content')
        
    </div>
</body>

</html>
