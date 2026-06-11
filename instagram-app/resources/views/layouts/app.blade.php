<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header style="background-color: #1b72c9;">
        <h1>インスタグラム風アプリ</h1>
    </header>
    <div class="content">
        @yield('content')
    </div>

    <footer style="background-color: #1b72c9;">
        <p>© 2026 インスタグラム風アプリ</p>
    </footer>

</body>
</html>
