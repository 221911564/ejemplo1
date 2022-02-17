<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container"> 
    <h4>Realiza tu modificacion</h4>
    <div class="row">
        <div class="col-xl-12">
            <br><br>
            <form action="{{ route('salvar',['id' => $alumno->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <table>
                    <tr>
                        <td>Matricula</td>
                        <td><input type="text" name="matricula" value="{{$alumno->matricula}}"></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="nombre" value="{{$alumno->nombre}}"></td>
                    </tr>
                    <tr>
                        <td>Fecha de N</td>
                        <td><input type="date" name="fn" value="{{$alumno->fn}}"></td>
                    </tr>
                    <tr>
                        <td>Genero</td>
                        <td>
                            @if($alumno->genero == 'Femenino')
                            Femenino<input type="radio" name="genero" value="Femenino" checked><br>
                            Masculino<input type="radio" name="genero" value="Masculino">
                            @else
                            Femenino<input type="radio" name="genero" value="Femenino"><br>
                            Masculino<input type="radio" name="genero" value="Masculino" checked>
                            @endif
                    </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <input type="file" name="foto1">
                            <input type="hidden" name="foto2" value="{{$alumno->foto}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><textarea name="direccion">{{$alumno->direccion}}</textarea></td>
                    </tr>
                    
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" name="email" value="{{$alumno->email}}"></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><input type="password" name="pass" value="{{$alumno->pass}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="Submit" value="salvar"><br>
                            <a href="{{ route('lista') }}">
                                <button>Regresar</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>