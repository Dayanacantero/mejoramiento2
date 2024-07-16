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

        @foreach ($journeys as $journey)
        {{-- creo una fila --}}
        <tr>
            <td>{{$journey->id}}</td>
            <td>{{$journey->num_plazas}}</td>
            <td>{{$journey->fecha}}</td>
            <td>{{$journey->dato_adicional}}</td>
            <td><a href="{{route('journey.show',$journey->id)}}">Mostrar</a></td>
            <td><a href="{{route('journey.edit',$journey->id)}}">Editar</a></td>
            <td>
                <form action="{{route('journey.destroy',$journey->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"onclick>Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>