<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        @foreach($data as $d)
        <p>{{$d->name}}</p>
        <p>{{$d->street}}</p>
        <p>{{$d->number}}</p>
        <p>{{$d->suburb}}</p>
        <p>{{$d->city}}</p>
        <p>{{$d->state}}</p>
        <p>{{$d->phone}}</p>
        <p>{{$d->email}}</p>
        @endforeach
    </body>
</html>
