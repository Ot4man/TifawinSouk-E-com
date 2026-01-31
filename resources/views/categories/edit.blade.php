<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>

<h1>Edit Category</h1>

<form method="POST" action="/categories/{{ $category->id }}">
    @csrf
    @method('PUT')

    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $category->name }}"><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ $category->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
