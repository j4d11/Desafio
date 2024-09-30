<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
<h1>Lista de Produtos</h1>
<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} - Categoria: {{ $product->category->name }}
            <a href="{{ route('products.edit', $product->id) }}">Editar</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>
    <a href="{{ route('products.create') }}">Criar Novo Produto</a>
</body>
</html>


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Produtos</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
           <tr>
            <td>{{$product->name}}</td>
           </tr>
           @empty
           <tr>
            <td colspan=100>Nenhum produto</td>
           </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>-->