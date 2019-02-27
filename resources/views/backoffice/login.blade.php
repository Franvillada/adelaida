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
    <div class="row header" style="background-color: #D6C8A8;">
        <div class="col-lg-8 offset-lg-2 d-flex justify-content-center align-items-center">
            <h1>Administrador de Contenidos</h1>
        </div> 
    </div>
    <div class="row login-container">
        <div class="col-4 offset-4 px-5">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Ingresa tu email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Ingresa tu constraseña">
                </div>
                <div class="form-group alert-danger">
                    <span>{{session()->get('error')}}</span>
                </div>
                <button type="submit" class="btn btn-primary boton-ingreso mt-4">Ingresar</button>
            </form>
        </div>
        
    </div>
</body>
</html>
