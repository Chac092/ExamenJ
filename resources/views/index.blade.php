@extends("layouts.page")
@section("head-extras")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section("content")
    <h1>Listado libros de mi Biblioteca</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <button><a href="/crear">Crear</a></button>
    <table border=2>
        <tr><td>Caratula</td><td>Titulo</td><td>Autor</td></tr>
        @foreach($libros as $libro)
            <tr>
                <td><img width="100px" height="200px" src="FotosLibros/{{$libro->caratula}}"></td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autores->nombre}}</td>
                <td><button>Ver</button><button>Editar</button><button>Eliminar</button></td>       
            </tr>
        @endforeach 
    </table>
@endsection