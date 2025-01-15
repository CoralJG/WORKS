@extends('layouts.app')

@section('title', 'Index Misions')

@section('content')
<h1>Misions</h1>
<a href="{{route('welcome')}}">Welcome Page</a><br>
@foreach($misiones as $mision)
<select name="tripulante_id" id="tripulante_id">
    <option value="{{ $mision->id }}">{{ $mision->nombre }}</option>
    <input type="submit" value="Filtrar">
    @endforeach
</select><br>
<a href="{{ route('misiones.create') }}">Create Mision</a>
@forelse ($misiones as $mision)
<li>
    The mision is: {{$mision->nombre}} -
    Description: {{$mision->descripcion}} -
    Fecha de lanzamiento: {{$mision->fecha_lanzamiento}} -
    Crew: {{$mision->tripulante->nombre}} -
    Activa(Activa=1, No activa=0): {{$mision->activo}}
    <a href="{{ route('misiones.edit', $mision->id) }}">✏️</a>
    <form action="{{ route('misiones.destroy', $mision->id) }}" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <input type="submit" value="🗑️">
    </form>
</li>
@empty
<li>Nothing</li>
@endforelse
@endsection
