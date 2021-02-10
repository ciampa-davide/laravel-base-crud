<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css\app.css') }}">

        <title>Laravel</title>


    </head>
    <body>
        <div class="container">

            <h1>LE BIRRE</h1>


            <table class="table table-dark table-stripped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Stato</th>
                        <th>Fabbrica</th>
                        <th>Prezzo</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($beers as $beer)

                        <tr>
                            <td>{{ $beer->id }}</td>
                            <td>{{ $beer->name }}</td>
                            <td>{{ $beer->country }}</td>
                            <td>{{ $beer->manufacturer }}</td>
                            <td>{{ $beer->price }}</td>
                            <td>{{ $beer->isbn }}</td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        
    </body>
</html>