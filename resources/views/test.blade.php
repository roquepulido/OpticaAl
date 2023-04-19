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
        <ul>
            @php $elem=json_decode($d) @endphp @foreach($elem as $e => $key)
            <li>
                <strong>{{ $e }} </strong> : {{ $key }}
            </li>

            @endforeach
        </ul>
        @endforeach
    </body>
</html>
