<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
    @yield('page-css')
</head>
<body>
@yield('main')
<script src="{!! asset('js/all.js') !!}"></script>
</body>
</html>