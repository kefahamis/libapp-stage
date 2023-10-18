<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet">
    
    </style>
</head>

<body class="antialiased">
    <!-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-end gap-5 mt-4">
            <div class="align-self-center">
                <img src="{{ asset('assets/img/liberator-logo.svg') }}" alt="Liberator Logo" class="brand-image elevation-3" width="200" />
            </div>
            <div>
                <h1 class="text-center">Welcome to Liberator</h1>
                <p class="text-center">CPD Booking app</p>
            </div>
            <div class="mt-5">
                <a href="/book" class="btn-theme">Getting Started</a>
            </div>

        </div>

    </div>

</body>

</html>