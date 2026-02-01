<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
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
        <div class="max-w-lg mx-auto bg-white p-6 border border-gray-300">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Create Category</h1>
    
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
    
                <div class="mb-4">
                    <label class="block mb-1 font-semibold text-gray-700">Name</label>
                    <input class="border border-gray-400 p-2 w-full text-black" type="text" name="name" required placeholder="e.g. Electronics">
                </div>
    
                <div class="mb-6">
                    <label class="block mb-1 font-semibold text-gray-700">Description</label>
                    <textarea class="border border-gray-400 p-2 w-full text-black" name="description" rows="4"></textarea>
                </div>
    
                <div class="flex items-center justify-between">
                    <button class="bg-stone-600 hover:bg-stone-700 text-white font-bold py-2 px-6 shadow-none" type="submit">
                        Save Category
                    </button>
                    <a href="{{ route('categories.index') }}" class="font-bold text-sm text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
