<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripulanteRequest extends FormRequest
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
			'DNI' => 'required|string|max:9|min:9',
		];
	}
}
