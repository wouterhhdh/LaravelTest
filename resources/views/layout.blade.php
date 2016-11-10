<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    {{-- /css/style.css verwijst naar public/css/style.css wanneer deze online staat --}}
    @yield ('header')
</head>
<body>
    @yield ('menu')    
    @yield('content')
    @yield('footer')
</body>
</html>