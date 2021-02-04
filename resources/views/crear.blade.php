<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Libro</h1>
        
    <form action="/crearLibro" method="post" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Titulo</label><br>
        <input name="titulo" type="text"></input><br>
        <label for="autor">Autor</label><br>
        <select name="autor" id="autor">
        @foreach($autores as $autor)
            <option value="{{$autor->id}}">{{$autor->nombre}}</option>
        @endforeach
        </select><br>
        <label for="isbn">Isbn</label><br>
        <input name="isbn" type="text">Isbn</input><br>
        <label for="caratula">Caratula</label><br>
        <input  name="caratula" type="file"/>
        <input type="submit">
    </form>
</body>
</html>