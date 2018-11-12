@include('pile.styles')

@include('pile.scripts')

<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @stack('head')

    <title>{{$title ?? ''}}</title>

</head>

<body>

@yield('content')

</body>
</html>