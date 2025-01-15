@extends('layouts.app')

@section('title', 'Create Crews')

@section('content')
<h1>Create Crew</h1>
<a href="{{ route('tripulantes.index') }}">Go Back</a>
<form action="{{ route('tripulantes.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Name" required>
    <input type="text" name="DNI" placeholder="DNI" required>
    <input type="submit" value="Create Crew">
</form>
@endsection
