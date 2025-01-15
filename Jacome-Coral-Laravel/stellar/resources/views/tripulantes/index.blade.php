@extends('layouts.app')

@section('title', 'Index Crews')

@section('content')
<h1>Misions</h1>
<a href="{{route('welcome')}}">Welcome Page</a><br>
<a href="{{ route('tripulantes.create') }}">Create Crews</a>
@forelse ($tripulantes as $tripulante)
<li>
    The crew is: {{$tripulante->nombre}} -
    DNI: {{$tripulante->DNI}}
    <a href="{{ route('tripulantes.edit', $tripulante->id) }}">✏️</a>
    <form action="{{ route('tripulantes.destroy', $tripulante->id) }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <input type="submit" value="🗑️">
    </form>
</li>
@empty
<li>Nothing</li>
@endforelse
@endsection
