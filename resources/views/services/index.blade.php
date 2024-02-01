@extends('layouts.app')

@section('content')
<main class="container p-4 mx-auto mt-8 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
    @forelse($services as $service)
        <div class="bg-white rounded-md shadow-md overflow-hidden">
            <div class="bg-teal-500 p-4 text-white">
                <h2 class="text-xl font-bold">{{ $service->title }}</h2>
            </div>
            <div class="p-4">
                <p class="text-gray-700"><span class="font-bold">Description:</span> {{ $service->description }}</p>
                <p class="text-gray-700"><span class="font-bold">Catégorie:</span> {{ $service->category->name }}</p>
                <p class="text-gray-700"><span class="font-bold">Coût:</span> {{ $service->cost }}</p>
                <div class="text-gray-800 mt-4">Informations du prestataire</div>
                <p class="text-gray-700"><span class="font-bold">Nom:</span> {{ $service->provider_name }}</p>
                <p class="text-gray-700"><span class="font-bold">Email:</span> {{ $service->provider_email }}</p>
        </div>
            <div class="bg-gray-100 p-4">
                <a href="#" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600 transition duration-300 ease-in-out">Voir plus</a>
            </div>
        </div>
    @empty
        <p>Aucun service disponible pour le moment.</p>
    @endforelse
</main>

@endsection
