<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LaraApp Practice')</title>
</head>
<body>
<ul>
    <li>
        <p><a href="/">Home Page</a></p>
    </li>
    <li>
        <p><a href="/about">About</a></p>
    </li>
    <li>
        <p><a href="/contact">Contact Us</a></p>
    </li>
</ul>
@yield('content')
</body>
</html>
