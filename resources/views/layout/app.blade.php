<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="icon" href="{{ Vite::asset('/resources/images/favicon.ico') }}">
    <title>DC | @yield('page-title') </title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        @include('partials.header')
        @yield('main-content')
        @include('partials.footer')
    </div>
</body>

</html>
