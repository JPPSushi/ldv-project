<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>LDV Esport</title>
</head>
<body class="relative min-h-screen">

@include('pages.users.partials.navbar')

<div class="pb-48">
    @yield('main')
</div>

@include('pages.users.partials.footer')

</body>
</html>
