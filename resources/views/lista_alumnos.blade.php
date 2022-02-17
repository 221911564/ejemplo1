<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion - Alumno </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <h4>Gestión de Alumnos</h4>
   <div class="row">
      <div class="col-xl-12">
             <div class="form-row">
                <div class="col-auto my-1">
                    <a href="{{route('create')}}" class="btn btn-primary">Agregar Registro</a>
                </div>
          </form>
      </div>
      <div class="col-xl-12">
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <td>Opciones</td>
                    <td>Matricula</td>
                    <td>Nombre</td>
                    <td>Fecha N.</td>
                    <td>Genero</td>
                    <td>Dirección</td>
                    <td>E-mail</td>
                    <td>Contraseña</td>
                    <td>Foto</td>
                    <td>id_grupo</td>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>
                    <td>
                        <a href="{{ route('detalle', ['id' => $dato -> id]) }}">Detalle</a><br>
                        <a href="{{ route('editar', ['id' => $dato -> id]) }}">Editar</a><br>
                        <a href="{{ route('borrar2', ['id' => $dato -> id]) }}">Eliminar</a><br>
                        <form name="borrar" action="{{ route('borrar', ['id' => $dato -> id])}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                        </form>     
                        </td>
                    <td>{{$dato->matricula}}</td>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->fn}}</td>
                    <td>{{$dato->genero}}</td>
                    <td>{{$dato->direccion}}</td>
                    <td>{{$dato->email}}</td>
                    <td>{{$dato->pass}}</td>
                    <td>{{$dato->foto}}</td>
                    <td>{{$dato->id_grupo}}</td>
                </tr>
                @endforeach
        </div>
      </div>
    </tbody>
</table>
</body>
</html>