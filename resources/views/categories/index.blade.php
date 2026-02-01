<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FAF9F6] font-sans text-stone-900">

<div class="flex min-h-screen">
    <aside class="w-64 bg-[#F5F5DC] shadow-md hidden md:block flex-shrink-0">
        <div class="p-6">
            <a href="{{ route('products.index') }}" class="text-2xl font-bold text-stone-900 flex items-center gap-2">
                TifawinSouk
            </a>
        </div>
        <nav class="mt-6">
            <a href="{{ route('products.index') }}" class="block py-3 px-6 hover:bg-[#E8E8D0] {{ request()->routeIs('products.index') ? 'bg-[#E8E8D0] font-bold' : '' }}">
                Products
            </a>
            <a href="{{ route('categories.index') }}" class="block py-3 px-6 hover:bg-[#E8E8D0] {{ request()->routeIs('categories.*') ? 'bg-[#E8E8D0] font-bold' : '' }}">
                Categories
            </a>
        </nav>
    </aside>

    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}" class="bg-stone-700 hover:bg-stone-800 text-white font-bold py-2 px-4 rounded shadow transition">
                + Add Category
            </a>
        </div>
    
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Slug</th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 font-semibold">{{ $category->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-600">{{ $category->slug }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                            <div class="flex items-center justify-end space-x-2">
                                <a href="{{ route('categories.edit', $category->id) }}" class="text-stone-700 hover:text-stone-900 font-medium">Edit</a>
                                
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 font-medium ml-2">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
