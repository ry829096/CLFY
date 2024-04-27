<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @yield('styles') <!-- Yield to additional CSS styles -->
</head>
<body>
    @include('header')

    <main>
        @yield('content')
    </main>

    @include('footer')
@yield('js')
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
