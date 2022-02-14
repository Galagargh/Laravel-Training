
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Test</title>
</head>
<body class="font-body
             desktop:max-w-2xl
            ">
    <header class="font-header">
        @yield('banner')
    </header>

    @yield('content')
</body>
</html>
