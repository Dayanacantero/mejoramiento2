<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('journey.update', $journey)}}"  method="POST">

        @csrf
        @method('put')
        <label>
        Num_plazas:
        <br>
        <input name="num_plazas" type="text" value="{{old('num_plazas',$journey->num_plazas) }}">
        <br>
        </label>
        <br>
        <label>
        Fecha:
        <br>
        <input name="fecha" type="text" value="{{old('fecha',$journey->fecha)}}">
        <br>
        </label>
        <br>
         <label>
        Dato adicional:
        <br>
        <input name="dato_adicional" type="text" value="{{old('dato_adicional',$journey->dato_adicional)}}">
        <br>
        </label>
        <br>
        <button  type="submit">Actualizar Viajero</button>
       
    </form>
</body>
</html>