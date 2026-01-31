<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>

<h1>Categories</h1>

<a href="/categories/create">Add Category</a>

<hr>

@foreach ($categories as $category)
    <p>
        <strong>{{ $category->name }}</strong>
        |
        <a href="/categories/{{ $category->id }}/edit">Edit</a>
        
        <form action="/categories/{{ $category->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red;">Delete</button>
        </form>
    </p>
@endforeach

</body>
</html>
