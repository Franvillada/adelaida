<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Adelaida - Administrador de Contenidos</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/lord.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display" rel="stylesheet">
</head>
<body>
    <div class="row container-fluid p-0 m-0 backoffice-container">
    <div class="col-lg-12">
        <div class="row header" style="background-color: #D6C8A8;">
        <div class="col-lg-3 text-center">
            <img src="{{ asset('images/Logo.svg')}}" alt="Logo-Adelaida" class="logo">
        </div>
        <div class="col-lg-7 d-flex align-items-center justify-content-center">
            <h1>Administrador de Contenidos</h1>
        </div> 
        </div>

        <div class="row contenido">
        <div class="col-lg-2 aside">

            <div class="row mt-5 mb-3">
            <div class="col-lg-12 modulos text-center">
                <a href="{{ route('imagen-principal') }}">Imagen Principal</a>
            </div>
            </div>

            <div class="row mt-5 mb-3">
            <div class="col-lg-12 modulos text-center">
                <a href="">Texto de la Pagina</a>
            </div>
            </div>

            <div class="row mt-5 mb-3">
            <div class="col-lg-12 modulos text-center">
                <a href="">Noticias</a>
            </div>
            </div>

        </div>

        <div class="col-lg-10">
            @yield('content');
        </div>
        </div>

    </div>
    </div>
</body>
</html>
