<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
			'nombre' => 'required|string',
			'tipo' => 'required',
			'asistentes' => 'required',
			'acceso' => 'required',
			'comentarios' => 'string',
			'fecha_inicio' => 'required',
			'fecha_fin' => 'required',
			'hora_inicio' => 'required',
			'hora_fin' => 'required',
			'estatus' => 'required',
			'id_usuario' => 'required',
			'id_salon' => 'required',
        ];
    }
}
