<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container"> 
    <h4>Agregar nuevo usuario</h4>
    <form action="{{route('store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="matricula">Matricula</label>
        <input type="text" class="form-control" name="matricula" placeholder="221910380">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" required maxlength="30" placeholder="Usuario">
    </div>
    <div class="form-group">
        <label for="fn">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fn">
    </div><br>
    <div class="form-group">
        <label for="genero">Genero</label><br>
        @if('')
            Femenino<input type="radio" name="genero" value="Femenino" checked><br>
            Masculino<input type="radio" name="genero" value="Masculino">
            @else
            Femenino<input type="radio" name="genero" value="Femenino"><br>
            Masculino<input type="radio" name="genero" value="Masculino" checked>
         @endif
    </div><br>
    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="textarea" class="form-control" name="direccion" placeholder="Toluca, Estado de México">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="pass">Contraseña</label>
        <input type="password" class="form-control" name="pass"placeholder="*******">
    </div><br>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Guardar">
        <input type="reset" class="btn btn-danger" value="Cancelar"><br>
        <a href="javascript:history.back()">Ir al listado</a>
    </div>
</form>
</div>
</div>
</body>
</html>