@extends('layouts.backoffice')

@section('content')

<div class="row mt-4">
<div class="col-lg-6 offset-lg-3 contenedor-imagen">
    <img src="{{(isset($image->photo_path)) ? asset($image->photo_path) : asset('images/Background-Home.jpg') }}" class="w-100 h-100">
</div>
</div>

<div class="row mt-4">
<div class="col-lg-6 offset-lg-3">
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="form-group d-flex align-content-center justify-content-around">
            <label for="background-image" class="background-image-label label-formulario">Elegir Imagen</label>
            <input id="background-image" type="file" class="background-image-input form-control mb-0 contenedor-input" name="background-image" autofocus>
            <button type="submit">Actualizar Imagen</button>
        </div>

        
    </form>
</div>
</div>

@endsection
