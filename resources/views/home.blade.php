<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adelaida - Tienda de Diseño</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lord.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">

</head>
<body>
<div id="home" class="row banner-container" style="background-image: url('{{(isset($image->photo_path)) ? asset($image->photo_path) : asset('images/Background-Home.jpg') }}');">
        <div class="col-12">
            <div class="row">
                <div class="col-md-2 col-lg-2 mt-4 p-0 text-right header-links">
                    <a id="link-conocenos"><p class="mt-2">Conocenos</p></a>
                </div>
                <div class="col-md-2 col-lg-2 mt-4 p-0 text-right header-links">
                    <a id="link-noticias"><p class="mt-2">Noticias</p></a>
                </div>
                <div class="col-md-4 offset-md-0 col-lg-4 offset-lg-0 text-center mt-3">
                    <img src="{{ asset('svg/Logo.svg')}}" alt="Logo-Adelaida" class="logo">
                </div>
                <div class="col-2 mt-4 header-links p-0">
                    <a href="https://adelaida.mitiendanube.com/" target="_blank"><img src="{{ asset('svg/cart-icon.svg')}}" class="cart-icon float-left">
                    <p class="mt-2">Store</p></a>
                </div>
                <div class="col-2 mt-4 text-left header-links p-0">
                    <a id="link-contacto"><p class="mt-2">Contacto</p></a>
                </div>    
            </div>
            <div class="row store mb-3">
                <div class="col-sm-4 offset-sm-4 d-flex justify-content-center">
                    <a href="https://adelaida.mitiendanube.com/" target="_blank" class="botones pt-1 pb-2 px-4 m-0">
                        <img src="{{ asset('svg/cart-icon.svg')}}" class="cart-icon p-0 align-middle">
                        <p class="d-inline align-middle">Store</p>
                    </a>
                </div>
            </div>
            <div class="row banner-texto text-center">
                <div class="col-8 offset-2 col-lg-6 offset-lg-3">
                    <h1>{{$phrase->principle}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="conocenos" class="row contenedor-info-marca">
        <div class="col-12">
            <div class="row">
                <div class="col-8 offset-2 col-md-2 offset-md-4 botones text-center align-middle" id="marca">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3 id="marcah3">Quienes Somos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-marca"></p>
                </div>
                <div class="col-8 offset-2 col-md-2 offset-md-0 botones text-center align-middle" id="objetivos">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3 id="objetivosh3">Que Buscamos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-objetivos"></p>
                </div>
                
            </div>
            <div class="row contenedor-texto-info-marca2">
                <div class="col-8 offset-2 col-lg-6 offset-lg-3 text-center">
                    <p id="texto-dinamico"></p>
                </div>
            </div>
        </div>
    </div>

    <div id="noticias" class="row contenedor-noticias">
    <div class="col-12">

        <div class="row mb-5">
            <div class="col-10 offset-1 text-center">
                <h2>Noticias</h2>
            </div>
        </div>
        <div class="row contenedor-noticias2 mb-4">
            <div id="contenedor-noticia1" class="col-10 offset-1 col-md-4 offset-md-0 col-lg-3 offset-lg-0 contenedor-noticia1 mx-4 my-1">
                <div id="categoria-noticia1" class="categoria justify-content-center align-items-end">
                    <div class="contenedor-categoria mb-3 w-75">
                        <h2>Moda</h2>
                    </div>
                </div>
                <div id="info-noticia1" class="info-noticia text-center">
                    <h3 class="mt-4">{{$arr[0]->title}}</h3>
                    <p class="mt-3 mx-5 descripcion-noticia">{{$arr[0]->description}}</p>
                    <p class="mt-5"><a href={{$arr[0]->link}}>Ver Noticia</a></p>
                </div>
            </div>
            <div id="contenedor-noticia2" class="col-10 offset-1 col-md-4 offset-md-0 col-lg-3 offset-lg-0 mx-2 contenedor-noticia2 mx-4 my-1">
                <div id="categoria-noticia2" class="categoria justify-content-center align-items-end">
                    <div class="contenedor-categoria mb-3 w-75">
                        <h2>Sustentabilidad</h2>
                    </div>
                </div>
                <div id="info-noticia2" class="info-noticia text-center">
                    <h3 class="mt-4">{{$arr[1]->title}}</h3>
                    <p class="mt-3 mx-5 descripcion-noticia">{{$arr[1]->description}}</p>
                    <p class="mt-5"><a href={{$arr[1]->link}}>Ver Noticia</a></p>
                </div>
            </div>
            <div id="contenedor-noticia3" class="col-10 offset-1 col-md-4 offset-md-0 col-lg-3 offset-lg-0 contenedor-noticia3 mx-4 my-1">
                <div id="categoria-noticia3" class="categoria justify-content-center align-items-end">
                    <div class="contenedor-categoria mb-3 w-75">
                        <h2>Emprendedurismo</h2>
                    </div>
                </div>
                <div id="info-noticia3" class="info-noticia text-center">
                    <h3 class="mt-4">{{$arr[2]->title}}</h3>
                    <p class="mt-3 mx-5 descripcion-noticia">{{$arr[2]->description}}</p>
                    <p class="mt-5"><a href={{$arr[2]->link}}>Ver Noticia</a></p>
                </div>
            </div>
        </div>

    </div>
    </div>

        
    <div id="contacto" class="row contenedor-contacto">
        <div class="col-12 d-flex justify-content-center text-center">
            <a href="https://www.instagram.com/adelaida.lingerie/" target="_blank"><img class="icon" src="{{ asset('svg/instagram-icon.svg')}}">
            </a>
            <a href="https://www.facebook.com/Adelaida.salta/" target="_blank"><img class="icon" src="{{ asset('svg/facebook-icon.svg')}}">
            </a>
        </div>
    </div>
    
    <div class="row contenedor-pie-pagina">
        <div class="col-12">
            <div class="row">
                <div class="col-10 offset-1 d-flex justify-content-center">
                    <img src="{{ asset('svg/footer-logo.svg') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1 mb-2">
                    <p class="font-weight-light text-center">© Copyright 2019 Francisco Villada</p>
                </div>
            </div>  
        </div>      
    </div>

    <div class="row contenedor-pie-pagina2">
        <div class="col-5 offset-1 text-center p-0">
            <h3>Contacto</h3>
            <a href="mailto:adelaida@adelaida.com?Subject=Hola" target="_top"><p>adelaida@adelaida.com</p></a>
            <p>+54 387 6055209</p>
            <p>Salta</p>
            <p><strong>Los Juncos 538 - Tres Cerritos</strong></p>
            <p>Showroom</p>
            <p><strong>La Comarca - San Lorenzo Chico</strong></p>
            <p>Lunes a Sabados de 9:30 a 13:30 y de 17:00 a 21:00</p>
        </div>
        <div class="col-4 offset-1 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('svg/footer-logo.svg') }}" alt="Adelaida Brand-Logo" id="logo-footer">
            <p class="font-weight-light text-center mt-3">© Copyright 2019 Francisco Villada</p>  
        </div>
    </div>
    
<script src="{{asset('js/lord.js')}}"></script>
</body>
</html>
