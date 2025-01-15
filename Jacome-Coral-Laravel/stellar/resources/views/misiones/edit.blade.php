@extends('layouts.app')

@section('title', 'Edit Misions')

@section('content')
<h1>Update Mision: {{$mision->nombre}}</h1>
<a href="{{ route('misiones.index') }}">Go Back</a>
<form action="{{ route('misiones.update', $mision->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeholder="Name" value="{{$mision->nombre}}">
    <input type="text" name="descripcion" placeholder="Description" value="{{$mision->descripcion}}">
    <input type="date" name="fecha_lanzamiento" placeholder="Launch date">
    <label for="tripulante_id">Select Crew:</label>
    <select name="tripulante_id" id="tripulante_id">
        @foreach($tripulantes as $tripulante)
        <option value="{{ $tripulante->id }}">{{ $tripulante->nombre }}</option>
        @endforeach
    </select>
    <input type="submit" value="Update Mision">
</form>
@endsection
