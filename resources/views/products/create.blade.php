<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <h1>Criar Novo Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <!-- Nome do Produto -->
    <label for="name">Nome do Produto:</label>
    <input type="text" name="name" id="name" required>

    <!-- Seleção de Categoria -->
    <label for="category_id">Categoria:</label>
    <select name="category_id" id="category_id" required>
        <option value="">Selecione uma categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <!-- Botão de Enviar -->
    <button type="submit">Salvar Produto</button>
</form>



</body>
</html>
