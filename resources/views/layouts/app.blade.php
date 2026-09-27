<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog CRUD')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 text-white px-8 py-4 mb-6">
        <a href="{{ route('posts.index') }}" class="font-bold text-xl">Blog CRUD Laravel</a>
    </nav>

    <div class="max-w-3xl mx-auto px-4">
        @yield('content')
    </div>

</body>
</html>