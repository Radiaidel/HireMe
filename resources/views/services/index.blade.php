@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-6">

    @forelse($services as $service)
    <div class="bg-white p-6 rounded-lg shadow-md">
        <span class="bg-indigo-500 text-white px-2 py-1 rounded-full mb-4 inline-block">{{ $service->category->name }}</span>
        <h2 class="text-xl font-semibold mb-2">{{ $service->title }}</h2>
        <p class="text-gray-600 mb-4"> {{ $service->description }}</p>
        <p class="text-gray-800 font-bold mb-2">À partir de <span class="text-2xl text-indigo-500">${{ $service->cost }}</span></p>
        <div class="flex items-center">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Prestataire" class="rounded-full h-8 w-8 mr-2">
            <div>
                <p class="text-gray-700 font-semibold">{{ $service->provider_name }}</p>
                <p class="text-indigo-500">{{ $service->provider_email }}</p>
            </div>
        </div>
    </div>
    @empty
    <p>Aucun service disponible pour le moment.</p>
    @endforelse
</div>

@endsection