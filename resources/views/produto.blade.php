<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos da Categoria {{ $nomeCategoria }}</title>
</head>

<body>
    <h1>Produtos da Categoria: {{ $nomeCategoria }}</h1>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto->Produto }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/categoria') }}">Voltar para Categorias</a>
</body>

</html>