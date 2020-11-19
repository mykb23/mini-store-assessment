<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    @include('layouts.inc.navbar')
    <div class="container py-5">
        @yield('content')
    </div>
    <script async src="{{asset('js/index.js')}}"></script>
</body>
</html>
