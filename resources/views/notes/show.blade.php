@extends('notes.layout')

@section('content')
    Show Note<br/><br/>

    <x-label value="Title:" />
    {{ $note->title }}<br/><br/>
    <x-label value="Content:" />
    {{ $note->content }}<br/><br/>

    <x-button class="bg-blue-500"><a href="{{ route('notes.index') }}">Back</a></x-button>
@endsection
