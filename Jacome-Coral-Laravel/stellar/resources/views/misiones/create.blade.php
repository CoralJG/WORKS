@extends('layouts.app')

@section('title', 'Create Misions')

@section('content')
<h1>Create Mision</h1>
<a href="{{ route('misiones.index') }}">Go Back</a>
<form action="{{ route('misiones.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Name" required>
    <input type="text" name="descripcion" placeholder="Description">
    <input type="date" name="fecha_lanzamiento" placeholder="Launch date" required>
    <label for="tripulante_id">Select Crew:</label>
    <select name="tripulante_id" id="tripulante_id">
        @foreach($tripulantes as $tripulante)
        <option value="{{ $tripulante->id }}">{{ $tripulante->nombre }}</option>
        @endforeach
    </select>
    <label class="flex flex-col block">
        <span class="">No activa</span>
        <input type="radio" value="0" name="activo" />
        <span class="">Activa</span>
        <input type="radio" value="1" name="activo" />
    </label>
    <input type="submit" value="Create Mision">
</form>
@endsection
