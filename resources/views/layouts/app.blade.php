<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #121212; /* Fondo oscuro más suave */
            color: #e0e0e0; /* Texto claro para contraste */
        }
        .navbar {
            background-color: #1e1e1e; /* Barra de navegación más oscura */
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #fff !important;
        }
        .navbar .nav-link:hover {
            color: #f1c40f !important; /* Efecto hover dorado */
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        .footer {
            background-color: #1e1e1e;
            color: #aaa;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            color: #f1c40f;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <!-- Navigation Bar -->
        @include('layouts.navigation')

        <!-- Main Content Area -->
        <main class="py-5">
            <div class="container">
                <!-- Example Card -->
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            
                            <div class="card-body">
                                <h5 class="card-title">Aplicacion de productos e inventario basica pero bonita</h5>
                                <p class="card-text">La creacion de este contenido tiene como fin la demostracion de habilidades en un campo de laravel php,con esto se muestra lo eficiente que puede ser y las mejoras que con la practica pueden llevarse acabo</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
