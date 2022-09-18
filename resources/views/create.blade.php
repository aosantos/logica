<!doctype html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Desafio</title>
</head>
<body>

<div class="shadow-none p-3 mb-5 bg-light rounded">
    <div>
        <form action="{{ action('\App\Http\Controllers\LogicaController@store') }}" enctype="multipart/form-data"
              class="form-horizontal" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Arquivo</label>
                <input class="form-control" name="cases" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
