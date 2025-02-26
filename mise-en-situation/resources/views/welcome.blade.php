<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>desc</th>
                    <th>price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $artical->name}}</td>
                <td>{{ $artical->desc}}</td>
                <td>{{ $artical->price}}</td>
                <td>
                    <button>delete</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
