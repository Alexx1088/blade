<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('test.header')}}">Header</a></li>
                <li><a href="{{ route('test.footer') }}">Footer</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
