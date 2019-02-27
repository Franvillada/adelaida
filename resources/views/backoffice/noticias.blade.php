@extends('layouts.backoffice')

@section('content')

<div class="row">
<div class="col-lg-4 offset-lg-4 pl-0">
    <form method="POST" action="" class="mt-5">
        @csrf
        @if ($errors->any())
        <div class="alert alert-warning mb-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="form-group">
            <label for="title" class="">Titulo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group mt-1">
            <label for="description" class="">Breve Descripción</label>
            <textarea rows="3" name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group mt-1">
            <label for="category" class="">Categoria</label>
            <select name="category" id="category" class="form-control">
                <option value="1">Moda</option>
                <option value="2">Sustentabilidad</option>
                <option value="3">Emprendedurismo</option>
            </select>
        </div>

        <div class="form-group mt-1">
            <label for="link">Link de la Noticia</label>
            <input type="text" name="link" id="link" class="form-control">
        </div>

        <div class="form-group mt-1">
            <button type="submit" class="form-control">Subir Noticia</button>
        </div>
        
    </form>
</div>
</div>

@endsection
