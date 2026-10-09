<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/png" href="{{ asset('photos/logo.png') }}">


    <title>@yield('title', 'Web Portal | ApusFly')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white font-sans antialiased">
    @yield('content')
</body>

</html>