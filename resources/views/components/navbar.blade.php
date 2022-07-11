<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ @vite }}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    {{-- FONT AWESOME CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<style>

        /* This is for Pets Table */
        .pet {

            overflow-x: auto;
            max-width: auto;
            white-space: nowrap;

        }

</style>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3F403F">
        <div class="container py-2 py-md-0">
            <a href="" class="navbar-brand">Title</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    @auth
                        @if (auth()->user()->role == 'customer')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/signout" class="nav-link">
                                    Signout
                                </a>
                            </li>
                        @elseif(auth()->user()->role == 'admin')
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link" data-bs-toggle="tooltip" title="Dashboard">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pets" class="nav-link" ata-bs-toggle="tooltip" title="Pets">
                                    <i class="fa-solid fa-paw"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown show" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-bell"></i>

                                    <div class="dropdown-menu text-center p-0">
                                        <ul class="list-group ">
                                            <li class="list-group-item">No notification yet.</li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/signout" class="nav-link" ata-bs-toggle="tooltip" title="Signout">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/signup" class="nav-link">
                                Sign up
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Sign in
                            </a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>

    </nav>

    {{ $slot }}

    <!-- Footer -->
    <footer class="page-footer font-small text-dark border-top border-top-4 border-secondary mt-auto"
        style="background-color: #fffcff">

        <div class="footer-copyright text-center py-3">
            © 2022 All rights reserved.
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>
