<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Reference:</label><br>
    <input type="text" name="reference" required><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" required><br><br>

    <label>Category:</label><br>
    <select name="category_id" required>
        <option value="">Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br><br>

    <label>Short Description:</label><br>
    <textarea name="short_description"></textarea><br><br>

    <button type="submit">Save Product</button>
</form>

</body>
</html>
