
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dettaglio Birra</h1>
    

    <form action="{{ route('beers.store') }}" method="POST">
        
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="nome">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="prezzo">
        </div>
        <div class="form-group">
            <label for="country">Stato</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Stato">
        </div>
        <div class="form-group">
            <label for="manufacturer">Fabbrica produttrice</label>
            <input type="text" class="form-control" name="manufacturer" id="manufacturer" placeholder="fabbrica produttrice">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>


