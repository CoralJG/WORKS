@extends('layouts.app')

@section('title', 'Edit Crews')

@section('content')
<h1>Update Crew: {{$tripulantes-> nombre}}</h1>
<a href="{{ route('tripulantes.index') }}">Go Back</a>
<form action="{{ route('tripulantes.update', $tripulantes->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nombre" placeholder="Name" value="{{$tripulantes->nombre}}" required>
    <input type="text" name="descripcion" placeholder="Description" value="{{$tripulantes->DNI}}" required>
    <input type="submit" value="Update Crew">
</form>
@endsection
