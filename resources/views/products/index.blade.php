<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h1>Products</h1>

<a href="{{ route('products.create') }}">Add New Product</a>

<hr>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Reference</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }} MAD</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->reference }}</td>
        <td>
             <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: red;">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
