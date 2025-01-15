<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MisionRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'nombre' => 'required|string|max:20|min:4',
			'fecha_lanzamiento' => 'required|date_format:Y-m-d',
			'activo' => 'required|boolean:0,1,true,false',
			'tripulante_id' => 'required|integer'
		];
	}
}
