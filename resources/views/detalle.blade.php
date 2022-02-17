<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h2>Detalles del alumno</h2>
    <table>
        <tr>
            <td colspan="2"><img src="{{ asset('archivos/'. $alumno->foto) }}" width="150" alt="imagen"></td>
        </tr>
        <tr>
            <td>Matricula</td>
            <td>{{$alumno->matricula}}</td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>{{$alumno->nombre}}</td>
        </tr>
        <tr>
            <td>Fecha de N</td>
            <td>{{$alumno->fn}}</td>
        </tr>
        <tr>
            <td>Genero</td>
            <td>{{$alumno->genero}}</td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td>{{$alumno->direccion}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('lista') }}">
                    <button>Salvar</button>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>