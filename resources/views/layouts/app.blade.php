<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="style'sheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans bg-gray-100">
    <header class="bg-gray-100 text-white p-4 border border-indigo-500 border-2">
        <div class="flex items-center justify-between">
            <a href="{{ route('services.index') }}" class="text-3xl font-bold text-indigo-500 hover:text-indigo-600">HireMe</a>
            <a href="{{ route('services.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md transition duration-300 ease-in-out">Ajouter un nouveau service</a>
        </div>
    </header>

    <section class="bg-indigo-300 p-2">
        <h2 class="text-xs text-white text-center font-bold">Trouvez des services exceptionnels à domicile!</h2>
    </section>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>