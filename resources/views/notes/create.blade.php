@extends('notes.layout')

@section('content')
    New Note<br/><br/>

    @if ($errors->any())
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif

    <form method="POST" action="{{ route('notes.store') }}">
        @csrf
        @method('POST')

        <!-- Title -->
        <div>
            <x-label for="title" value="Title:" />

            <x-input id="title" class="block mt-1 w-96" type="text" name="title" placeholder="Title" required autofocus />
        </div>

        <!-- Content -->
        <div class="mt-4">
            <x-label for="content" value="Content:" />

            <textarea id="content" class="block mt-1 w-96 h-300 resize-none rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="content" placeholder="Content"></textarea>
        </div>

        <!-- Submit -->
        <br/><br/>
        <x-button class="bg-blue-500" type="submit">Submit</x-button>
        <x-button class="ml-3 bg-blue-500"><a href="{{ route('notes.index') }}">Back</a></x-button>
    </form>

@endsection
