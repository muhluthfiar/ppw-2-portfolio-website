<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel='stylesheet' href='../css/navbar.css'>
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="./">    
                Muhammad Luthfi Azzahra Rammadhani
            </a>
        
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class='collapse navbar-collapse' id="navbarNav">
                <ul class="navbar-nav">
                    <li class='nav-item'>
                        <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link text-light" aria-current="page" href="/about">About</a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link text-light" aria-current="page" href="/education">Education</a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link text-light" aria-current="page" href="/contact">Contact</a>
                    </li>
                    <li class='nav-item'>
                        <a class="nav-link text-light" aria-current="page" href="/projects">Projects</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

        @yield('content')
        
    </body>
</html>
