@extends('layouts.backoffice')

@section('content')

<div class="row">
<div class="col-lg-4 offset-lg-4 pl-0">
    <form method="POST" action="">
        @csrf

        <div class="form-group mt-5">
            <label for="title" class="">Titulo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group mt-1">
            <label for="description" class="">Breve Descripción</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>

        <div class="form-group mt-1">
            <label for="category" class="">Categoria</label>
            <select name="category" id="category" class="form-control">
                <option value="1">Moda</option>
                <option value="2">Reciclaje</option>
                <option value="3">Lorem, ipsum.</option>
            </select>
        </div>

        <div class="form-group mt-1">
            <label for="link">Link de la Noticia</label>
            <textarea rows="3" name="link" id="link" class="form-control"></textarea>
        </div>

        <div class="form-group mt-1">
            <button type="submit" class="form-control">Subir Noticia</button>
        </div>
        
    </form>
</div>
</div>

@endsection
