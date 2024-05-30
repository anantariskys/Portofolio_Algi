@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Works</h2>
        <a href="{{ route('works.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Work</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">Description</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr class="border-b">
                    <td class="py-2 px-4"><img src="/images/{{ $work->image }}" width="100"></td>
                    <td class="py-2 px-4">{{ $work->title }}</td>
                    <td class="py-2 px-4">{{ $work->description }}</td>
                    <td class="py-2 px-4 flex items-center justify-center">
                        <a href="{{ route('works.edit', $work->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <form action="{{ route('works.destroy', $work->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
