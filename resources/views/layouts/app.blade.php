<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!-- resources/views/layouts/app.blade.php -->

<!-- ... -->

@auth
    <form method="POST" action="{{ route('login.destroy') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth

<!-- ... -->
