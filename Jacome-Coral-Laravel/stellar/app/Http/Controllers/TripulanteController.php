<?php

namespace App\Http\Controllers;
use App\Http\Requests\TripulanteRequest;
use App\Models\Tripulante;
use Illuminate\Http\Request;

class TripulanteController extends Controller
{
	public function index()
	{
		$tripulantes = Tripulante::all();
		return view('tripulantes.index', compact('tripulantes'));
	}

	public function create()
	{

		return view('tripulantes.create');
	}

	public function store(TripulanteRequest $request)
	{
		Tripulante::create($request->all());
		return redirect()->route('tripulantes.index');
	}

	public function edit($id)
	{
		$tripulantes = Tripulante::find($id);

		return view('tripulantes.edit', compact('tripulantes'));
	}

	public function update(Request $request, $id)
	{

		$tripulante = Tripulante::find($id);
		$tripulante->update($request->all());
		return redirect()->route('tripulantes.index', compact('tripulante'));

	}

	public function destroy($id)
	{

		$tripulante = Tripulante::find($id);
		$tripulante->delete();
		return redirect()->route('tripulantes.index');
	}
}
