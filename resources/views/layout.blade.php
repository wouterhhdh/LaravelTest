<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    {{-- /css/style.css verwijst naar public/css/style.css wanneer deze online staat --}}
    @yield ('header')
</head>
<body>
    @yield ('menu')
    <div class="container">
        @yield('content')
    </div> 
    
    @yield('footer')
</body>
</html>