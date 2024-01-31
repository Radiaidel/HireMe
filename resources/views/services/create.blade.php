@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Ajouter un Nouveau Service</h1>

        <form method="post" action="{{ route('services.store') }}" class="max-w-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Titre du Service:</label>
                <input type="text" name="title" id="title" class="border border-gray-300 p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description du Service:</label>
                <textarea name="description" id="description" class="border border-gray-300 p-2 w-full" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-bold mb-2">Catégorie:</label>
                <select name="category_id" id="category_id" class="border border-gray-300 p-2 w-full" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="cost" class="block text-gray-700 font-bold mb-2">Coût (optionnel):</label>
                <input type="number" name="cost" id="cost" class="border border-gray-300 p-2 w-full" step="0.01">
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Ajouter le Service</button>
        </form>
    </div>
@endsection
