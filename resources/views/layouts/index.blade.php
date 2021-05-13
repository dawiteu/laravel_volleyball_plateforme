<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
    <div class="container mx-auto text-center">
        @include('layouts.flash')
    </div>
    
    
    <div class="container my-5">

        {{-- @include('partials.nav') --}}

        @yield('content')
    </div>

    <script src={{asset('js/app.js')}}></script>
</body>
</html>