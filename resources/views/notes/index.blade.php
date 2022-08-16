@extends('notes.layout')

@section('content')
    Notes for {{ $user_name }}<br/><br/>

    @if ($message = Session::get('success'))
        <div class="bg-blue-100 rounded-lg py-5 px-6 mb-4 text-base text-blue-700 mb-3" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th>Title</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach ($notes as $note)
            <tr>
            <td class="pt-5 pb-5 pr-5">{{ $note->title }}</td>
            <td>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                    <x-button class="bg-green-500"><a href="{{ route('notes.show', $note->id) }}">Show</a></x-button>
                    <x-button class="ml-3 bg-yellow-500"><a href="{{ route('notes.edit', $note->id) }}">Modify</a></x-button>

                    @csrf
                    @method('DELETE')

                    <x-button class="ml-3 bg-red-500" type="submit">Remove</x-button>
                </form>
            </td>
            <tr>
            @endforeach
        </tbody>

    </table>

    <br/><br/>
    <x-button class="bg-blue-500"><a href="{{ route('notes.create') }}">New Note</a></x-button>

@endsection
