<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laracasts @yield('page-title', 'Series')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body>

    @include('partials.header')
    <!-- /#site_header -->

    <main id="site_main">
        @yield('content')
    </main>
    <!-- /#site_main -->

    @include('partials.footer')
    <!-- /#site_footer -->

</body>

</html>