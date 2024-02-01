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
    <header class="bg-teal-700 text-white p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold">HireMe</h1>
            <a href="{{ route('services.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-md shadow-md transition duration-300 ease-in-out">Ajouter un nouveau service</a>
        </div>
    </header>

    <section class="bg-teal-500 p-2">
        <h2 class="text-xs text-white text-center font-bold">Trouvez des services exceptionnels à domicile!</h2>
    </section>
    <div class="container mx-auto">
        @yield('content')
    </div>

</body>

</html>