@extends('layouts.app')

@section('content')
<div class="w-full p-4">
    <h1 class="text-2xl text-green-800 font-bold">HireMe</h1>
</div>

<div class="text-center p-4 bg-cover bg-center" style="background-image: url('/path/to/your/image.jpg');">
    <p class="text-lg mb-4">Choisissez HireMe pour des services exceptionnels à domicile!</p>
</div>

<div class="w-full mx-auto mt-4">
    <a href="{{ route('services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create New Service</a>
</div>


@section('content')
<div class="container mx-auto mt-12">
    <h1 class="text-3xl font-bold mb-4">Liste des Services</h1>

    @foreach($services as $service)
    <div class="bg-gray-100 p-4 my-2">
        <h2 class="text-xl font-bold">{{ $service->title }}</h2>
        <p class="text-gray-600">{{ $service->description }}</p>
        <p class="text-gray-700">Catégorie : {{ $service->category->name }}</p>
        <p class="text-gray-700">Coût : {{ $service->cost }}</p>
        <p class="text-gray-800">Informations du prestataire</p>
        <p class="text-gray-700">Nom  : {{ $service->provider_name }}</p>
        <p class="text-gray-700">Email : {{ $service->provider_email }}</p>


    </div>
    @endforeach
</div>
@endsection