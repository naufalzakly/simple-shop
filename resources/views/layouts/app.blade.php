<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/views/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/views/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/views/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/views/custom.css">
    @stack('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    @yield('scripts')
</head>
<body>
    <div id="app">
        @include('includes.header')
        <div class="container">
            <main class="pt-4">
                @yield('content')
            </main>
        </div>
    </div>

    @yield('js')

    @stack('script')
</body>
</html>
