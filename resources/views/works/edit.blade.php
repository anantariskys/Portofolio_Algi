@extends('layout')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Work</h2>

    <form action="{{ route('works.update', $work->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" value="{{ $work->title }}" class="border rounded w-full py-2 px-3 text-gray-700">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" class="border rounded w-full py-2 px-3 text-gray-700">{{ $work->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
            <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3 text-gray-700">
            <img src="/images/{{ $work->image }}" width="100" class="mt-4">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
@endsection
