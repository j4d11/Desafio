<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar produtos</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Método PUT para atualização -->
    
    <label for="name">Nome do Produto:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required> <!-- Campo para o nome do produto -->

    <label for="category_id">Categoria:</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Atualizar</button>
</form>

</body>
</html>