<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adelaida</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lord.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display" rel="stylesheet">

</head>
<body>
<div id="home" class="row banner-container" style="background-image: url('{{(isset($image->photo_path)) ? asset($image->photo_path) : asset('images/Background-Home.jpg') }}');">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-2 mt-4 text-right">
                    <a href="#conocenos"><h3 class="mt-2">Conocenos</h3></a>
                </div>
                <div class="col-lg-2 mt-4 text-right">
                    <a href="#noticias"><h3 class="mt-2">Noticias</h3></a>
                </div>
                <div class="col-lg-4 text-center mt-3">
                    <img src="{{ asset('images/Logo.svg')}}" alt="Logo-Adelaida" class="logo">
                </div>
                <div class="col-lg-2 mt-4">
                    <a href="https://adelaida.mitiendanube.com/" target="_blank"><img src="{{ asset('svg/cart-icon.svg')}}" class="cart-icon float-left">
                    <h3 class="mt-2">Store</h3></a>
                </div>
                <div class="col-lg-2 mt-4 text-left">
                    <a href="#contacto"><h3 class="mt-2">Contacto</h3></a>
                </div>    
            </div>
            <div class="row banner-texto text-center">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="conocenos" class="row contenedor-info-marca">
        <div class="col-lg-12">
            <div class="row text-center">
                <div class="col-lg-2 offset-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4" id="marca">
                            <h3><a href="">Marca</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4" id="valores">
                            <h3><a href="">Valores</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4" id="vision">
                            <h3><a href="">Vision</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4" id="productos">
                            <h3><a href="">Productos</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 offset-lg-3 text-center contenedor-texto-info-marca d-flex justify-content-center">
                    <p id="texto-dinamico"></p>
                </div>
            </div>
        </div>
    </div>
    <div id="noticias" class="row contenedor-noticias">
    <div class="col-lg-12">

        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h3>Ultimas Tendencias</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-4">
            <div id="contenedor-noticia1" class="col-lg-3 contenedor-noticia1">
                <div id="info-noticia1" class="info-noticia text-center">
                    <h3 class="mt-5">{{$arr[0]->title}}</h3>
                    <p class="mt-4 mx-5">{{$arr[0]->description}}</p>
                    <p class="mt-5"><a href={{$arr[0]->link}}>Ver Noticia</a></p>
                </div>
            </div>
            <div id="contenedor-noticia2" class="col-lg-3 mx-2 contenedor-noticia2">
                <div id="info-noticia2" class="info-noticia text-center">
                    <h3 class="mt-5">{{$arr[1]->title}}</h3>
                    <p class="mt-4 mx-5">{{$arr[1]->description}}</p>
                    <p class="mt-5"><a href={{$arr[1]->link}}>Ver Noticia</a></p>
                </div>
            </div>
            <div id="contenedor-noticia3" class="col-lg-3 contenedor-noticia3">
                <div id="info-noticia3" class="info-noticia text-center">
                    <h3 class="mt-5">{{$arr[2]->title}}</h3>
                    <p class="mt-4 mx-5">{{$arr[2]->description}}</p>
                    <p class="mt-5"><a href={{$arr[2]->link}}>Ver Noticia</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 offset-lg-5 botones text-center pt-2 pb-2 mt-4">
                <a href="">Ver Mas</a>
            </div>
        </div>
    </div>
    </div>

        
    <div id="contacto" class="row contenedor-contacto">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-7 mt-4 mb-4 offset-lg-2 d-flex align-items-center">
                    <img class="icon float-left mr-4" src="{{ asset('svg/phone-icon.svg')}}">
                    <p class="mb-0">387 6055209</p>
                </div>

                <div class="col-lg-7 mt-4 mb-4 offset-lg-2 d-flex align-items-center">
                    <img class="icon float-left mr-4" src="{{ asset('svg/email-icon.svg')}}">
                    <p class="mb-0">adelaida@adelaida.com</p>
                </div>

                <div class="col-lg-7 mt-4 mb-4 offset-lg-2 d-flex align-items-center">
                    <img class="icon float-left mr-4" src="{{ asset('svg/instagram-icon.svg')}}">
                    <a href="https://www.instagram.com/adelaida.lingerie/" target="_blank"><p class="mb-0">adelaida.lingerie</p></a>
                </div>

                <div class="col-lg-7 mt-4 mb-4 offset-lg-2 d-flex align-items-center">
                    <img class="icon float-left mr-4" src="{{ asset('svg/facebook-icon.svg')}}">
                    <a href="https://www.facebook.com/Adelaida.salta/" target="_blank"><p class="mb-0">adelaida.salta</p></a>
                </div>

                <div class="col-lg-7 mt-4 mb-4 offset-lg-2 d-flex align-items-center">
                    <img class="icon float-left mr-4" src="{{ asset('svg/location-icon.svg')}}">
                    <p id="direccion1" class="mb-0">Las Rosas 162</p><p class="mb-0 mx-4"> / </p>
                    <p id="direccion2" class="mb-0">San Lorenzo</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div id="map" style="height:100%;"></div>
        </div>
    </div>
    <div class="row contenedor-pie-pagina">
        <div class="col-lg-10 offset-lg-1">
            <div class="row pie-pagina pt-4 pb-4">
                <div class="col-lg-3 p-0">
                    <img src="{{ asset('svg/footer-logo.svg') }}">
                </div>
                <div class="col-lg-2 p-0 d-flex">
                    <a class="d-flex align-self-center" href="#home">Home</a>
                </div>
                <div class="col-lg-4 offset-lg-3 p-0 d-flex justify-content-end">
                    <h5 class="font-weight-light d-flex align-self-center">© Copyright 2018 Francisco Villada</h5>
                </div>
            </div>    
        </div>      
    </div>
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
        }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8_C0RyWqcmMm8RLZqE6-rqxn8p5bZEbM&callback=initMap"></script>
<script src="{{asset('js/lord.js')}}"></script>
</body>
</html>
