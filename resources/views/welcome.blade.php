<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="content" style="display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;">
        <h1 class="title text-lg m-b-md">
            Tweeter Clone
        </h1>
        <div class="links">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">
                    <h2>Home</h2>
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                    <h2>Log in</h2>
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                        <h2>Register</h2>
                    </a>
                @endif
            @endauth
        </div>



    </div>
</body>

</html>
