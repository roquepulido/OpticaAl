<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <h1>Sucursales</h1>
        @foreach($stores as $store)
        <h3>{{$store->name}}, {{$store->stateAbbr}}</h3>
        <ul>
            <li>Calle: {{$store->street}}</li>
            <li>Numero: {{$store->number}}</li>
            <li>Colonia: {{$store->suburb}}</li>
            <li>Ciudad: {{$store->city}}</li>
            <li>CP: {{$store->postcode}}</li>
            <li>Estado: {{$store->state}}</li>
            <li>Telefono: {{$store->phone}}</li>
            <li>Email: {{$store->email}}</li>
        </ul>

        @endforeach
    </body>
</html>
