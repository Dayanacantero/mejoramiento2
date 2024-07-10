<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde listar</h1>

    <table>

        @foreach ($travelers as $traveler)
        {{-- creo una fila --}}
        <tr>
            <td>{{$traveler->id}}</td>
            <td>{{$traveler->name}}</td>
            <td>{{$traveler->adress}}</td>
            <td>{{$traveler->telephone}}</td>
            <td><a href="{{route('traveler.show',$traveler->id)}}">Mostrar</a></td>
            <td><a href="{{route('traveler.edit',$traveler->id)}}">Editar</a></td>
            <td>
                <form action="{{route('traveler.destroy',$traveler->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>