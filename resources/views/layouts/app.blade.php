<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Laravel App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<header>
    <div class="container header-content">
        <h1>My Laravel App</h1>

        @guest
            <a href="{{ route('login') }}" class="btn">
                Inloggen
            </a>
        @endguest

        @auth
            <div class="header-user">
                <span>{{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn">
                        Uitloggen
                    </button>
                </form>
            </div>
        @endauth
    </div>
</header>

<main>
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')   
    </div>
</main>

</body>
</html>