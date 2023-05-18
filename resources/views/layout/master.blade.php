<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{ config('app.name', 'My JobBoard Application') }}</title>
    <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet"/>

    @yield('css')
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @yield('content')
    </div>   
</body>
</html>