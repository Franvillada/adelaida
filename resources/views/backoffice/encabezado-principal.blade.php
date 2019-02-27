@extends('layouts.backoffice')

@section('content')

<div class="row mt-4">
<div id="contenedor-imagen" class="col-lg-10 offset-lg-1 contenedor-imagen banner-container" style="background-image: url('{{(isset($image->photo_path)) ? asset($image->photo_path) : asset('images/Background-Home.jpg') }}');">
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
                <h1 id="encabezado-principal">{{$phrase->principle}}</h1>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row mt-4">
<div class="col-lg-6 offset-lg-3">
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="titulo" class="label-formulario">Encabezado Principal</label>
            <input type="text" name="titulo" class="form-control contenedor-input" value="" id="titulo">

            <button type="submit" class="mt-2 w-100">Actualizar Encabezado</button>
        </div>

        
    </form>
</div>
</div>

@endsection