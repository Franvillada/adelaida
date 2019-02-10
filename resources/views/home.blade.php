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
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="conocenos" class="row contenedor-info-marca">
        <div class="col-12">
            <div class="row">
                <div class="col-8 offset-2 col-md-2 offset-md-2 botones text-center align-middle" id="marca">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3>Marca</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-marca"></p>
                </div>
                <div class="col-8 offset-2 col-md-2 offset-md-0 botones text-center align-middle" id="valores">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3>Valores</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-valores"></p>
                </div>
                <div class="col-8 offset-2 col-md-2 offset-md-0 botones text-center align-middle" id="vision">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3>Vision</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-vision"></p>
                </div>
                <div class="col-8 offset-2 col-md-2 offset-md-0 text-center botones text-center align-middle" id="productos">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h3>Productos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-2 contenedor-texto-info-marca text-center">
                    <p id="texto-dinamico-productos"></p>
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
                <h2>Ultimas Tendencias</h2>
            </div>
        </div>
        <div class="row contenedor-noticias2 mb-4">
            <div id="contenedor-noticia1" class="col-10 offset-1 col-md-4 offset-md-0 col-lg-3 offset-lg-0 contenedor-noticia1 mx-4 my-1">
                <div id="categoria-noticia1" class="categoria justify-content-center align-items-end">
                    <div class="contenedor-categoria mb-3">
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
                    <div class="contenedor-categoria mb-3">
                        <h2>Reciclaje</h2>
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
                    <div class="contenedor-categoria mb-3">
                        <h2>Lorem</h2>
                    </div>
                </div>
                <div id="info-noticia3" class="info-noticia text-center">
                    <h3 class="mt-4">{{$arr[2]->title}}</h3>
                    <p class="mt-3 mx-5 descripcion-noticia">{{$arr[2]->description}}</p>
                    <p class="mt-5"><a href={{$arr[2]->link}}>Ver Noticia</a></p>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-lg-2 offset-lg-5 botones text-center pt-2 pb-2 mt-4">
                <a href="">Ver Mas</a>
            </div>
        </div>
        -->
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
    <!--
    <div class="row pt-4 pb-5 contenedor-mapa">
        <div class="col-10 offset-1">
            <div id="map" style="height:300px;"></div>  
        </div>
    </div>
    -->
    
    
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
        <div class="col-4 offset-1 text-center p-0">
            <h3>Contacto</h3>
            <p>adelaida@adelaida.com</p>
            <p>387 6055209</p>
            <p>Las Rosas 162</p>
            <p>San Lorenzo Chico</p>
        </div>
        <div class="col-5 offset-1 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('svg/footer-logo.svg') }}" alt="Adelaida Brand-Logo" id="logo-footer">
            <p class="font-weight-light text-center mt-3">© Copyright 2019 Francisco Villada</p>  
        </div>
    </div>
    <!--
    <script>
        var dir1 = document.querySelector('#direccion1');
        dir1.addEventListener('click',function(){
            initMap(-24.772954,-65.390259);
        })

        var dir2 = document.querySelector('#direccion2');
        dir2.addEventListener('click',function(){
            initMap(-24.788352,-65.495675);
        })

        function initMap(num1,num2) {
            var uluru = {lat: -24.772954, lng: -65.390259};
            if(num1 != null && num2 != null){
                uluru = {lat: num1, lng: num2};
            }
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
            console.log('hola');
        }

    </script>
    
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8_C0RyWqcmMm8RLZqE6-rqxn8p5bZEbM&callback=initMap"></script>
-->
<script src="{{asset('js/lord.js')}}"></script>

</body>
</html>
