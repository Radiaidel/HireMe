@extends('layouts.app')

@section('content')
    <div class="container p-3 w-full">

        <form method="post" action="{{ route('services.store') }}" class="mx-auto max-w-md bg-white p-6 rounded-md shadow-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Titre du Service:</label>
                <input type="text" name="title" id="title" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description du Service:</label>
                <textarea name="description" id="description" class="border border-gray-300 p-2 w-full resize-none focus:outline-none focus:border-blue-500" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-bold mb-2">Catégorie:</label>
                <select name="category_id" id="category_id" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="cost" class="block text-gray-700 font-bold mb-2">Coût (optionnel):</label>
                <input type="number" name="cost" id="cost" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" step="0.01">
            </div>

            <div class="mb-4">
                <label for="provider_name" class="block text-gray-700 font-bold mb-2">Nom du Prestataire:</label>
                <input type="text" name="provider_name" id="provider_name" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="provider_email" class="block text-gray-700 font-bold mb-2">Email du Prestataire:</label>
                <input type="email" name="provider_email" id="provider_email" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500" required>
            </div>

            <button type="submit" class="bg-indigo-500 text-white p-2 rounded ">Ajouter le Service</button>
        </form>
    </div>
@endsection
