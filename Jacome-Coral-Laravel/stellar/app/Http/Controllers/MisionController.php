<?php

namespace App\Http\Controllers;

use App\Http\Requests\MisionRequest;
use App\Models\Mision;
use App\Models\Tripulante;
use Illuminate\Http\Request;

class MisionController extends Controller
{
	public function index()
	{
		$misiones = Mision::all();
		$tripulantes = Tripulante::all();
		return view('misiones.index', compact('misiones', 'tripulantes'));
	}

	public function create()
	{
		$tripulantes = Tripulante::all();
		return view('misiones.create', compact('tripulantes'));
	}

	public function store(MisionRequest $request)
	{
		Mision::create($request->all());
		return redirect()->route('misiones.index');
	}

	public function edit($id)
	{
		$mision = Mision::find($id);
		$tripulantes = Tripulante::all();

		return view('misiones.edit', compact('mision', 'tripulantes'));
	}

	public function update(Request $request, $id)
	{

		$mision = Mision::find($id);
		$mision->update($request->all());
		return redirect()->route('misiones.index');

	}

	public function destroy($id)
	{

		$mision = Mision::find($id);
		$mision->delete();
		return redirect()->route('misiones.index');
	}

	public function filter(Request $request)
	{
		$query = Mision::query();
		if ($request->has('mision') && $request->mision) {
			$query->where('activo', $request->mision);
		}
		if ($request->has('tripulante') && $request->tripulante) {
			$query->where('tripulante_id', $request->tripulante);
		}

		$misiones = $query->get();
		$tripulantes = Tripulante::all();
		return view('misiones.filter', compact('misiones', 'tripulantes'));
	}


}
