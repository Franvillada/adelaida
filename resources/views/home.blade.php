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
    <div id="home" class="row banner-container">
        <div class="col-lg-12">
            <div class="row header">
                <div class="col-lg-2 mt-4 text-right">
                    <h3><a href="#home">Home</a></h3>
                </div>
                <div class="col-lg-2 mt-4 text-right">
                    <h3><a href="#conocenos">Conocenos</a></h3>
                </div>
                <div class="col-lg-4 text-center mt-3">
                    <img src="{{ asset('images/Logo.svg')}}" alt="Logo-Adelaida" class="logo">
                </div>
                <div class="col-lg-2 mt-4 text-left">
                    <h3><a href="#noticias">Noticias</a></h3>
                </div>
                <div class="col-lg-2 mt-4 text-left">
                    <h3><a href="#contacto">Contacto</a></h3>
                </div>    
            </div>
            <div class="row banner-texto text-center">
                <div class="col-lg-6 offset-lg-3">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="conocenos" class="row info-marca">
        <div class="col-lg-12">
            <div class="row text-center">
                <div class="col-lg-2 offset-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4">
                            <h3><a href="#">Marca</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4">
                            <h3><a href="#">Valores</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4">
                            <h3><a href="#">Vision</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 botones pt-2 mb-4">
                            <h3><a href="#">Productos</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, sed placeat commodi natus perferendis soluta sequi eveniet ipsa delectus necessitatibus maiores architecto voluptatem consequuntur corrupti consequatur temporibus magnam, alias non nostrum laboriosam. Aut voluptatibus corporis aperiam ex, porro harum dolor.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 offset-lg-5 boton text-center pt-2">
                    <h4><a href="#">Conoce mas...</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div id="noticias" class="row contenedor-noticias">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <img src="{{ asset('images/Imagen-Noticia.jpg')}}" class="img-noticia ml-5" alt="Foto noticia">
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <img src="{{ asset('images/Imagen-Noticia.jpg')}}" class="img-noticia" alt="Foto noticia">
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 p-0">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <img src="{{ asset('images/Imagen-Noticia.jpg')}}" class="img-noticia mr-5" alt="Foto noticia">
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 offset-lg-3 px-5">
                    <h4 class="text-center font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iure, cupiditate repellendus architecto velit dolor?</h4>
                    <a href="#" class="d-block text-right mt-3">MAS...</a>
                </div>
            </div>
        </div>
    </div>
    <div id="contacto" class="row contenedor-contacto">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-1 offset-lg-2">
                            <img class="icon" src="{{ asset('svg/phone-icon.svg')}}">
                        </div>
                        <div class="col-lg-4">
                            <p>387 6055209</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 offset-lg-2">
                            <img class="icon" src="{{ asset('svg/email-icon.svg')}}">
                        </div>
                        <div class="col-lg-4">
                            <p>adelaida@adelaida.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 offset-lg-2">
                            <img class="icon" src="{{ asset('svg/instagram-icon.svg')}}">
                        </div>
                        <div class="col-lg-4">
                            <p>adelaida.lingerie</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 offset-lg-2">
                            <img class="icon" src="{{ asset('svg/facebook-icon.svg')}}">
                        </div>
                        <div class="col-lg-4">
                            <p>adelaida.salta</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 offset-lg-2">
                            <img class="icon" src="{{ asset('svg/location-icon.svg')}}">
                        </div>
                        <div class="col-lg-4">
                            <p>Las Rosas 162</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="map" style="height:100%;"></div>
                </div>
            </div>
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
        function initMap() {
            var uluru = {lat: -24.772954, lng: -65.390259};
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8_C0RyWqcmMm8RLZqE6-rqxn8p5bZEbM&callback=initMap"></script>
</body>
</html>