<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GestaoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|max:20|min:5|',
            'descricao' => 'required|max:150|min:30|',
            'data_inicio' => 'required|max:5|min:9|',
            'data_termino' => 'required|max:5|min:9|',
            'valor_projeto' => 'required|max:11|min:11',
            'status' => 'required|max:120|',

            
        ];
        
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
}
public function messages()
            {
                return[
                    'titulo.required' =>'o campo titulo é obrigatorio',
                    'titulo.max' => 'o campo titulo deve conter no maximo 20 caracteres',
                    'titulo.min' => 'o campo titulo deve conter no minimo 5 caracteres',
                    'descricao.required' => 'descricao obrigatorio',
                    'descricao.max' => 'a descricao  deve conter no maximo 150 caracteres',
                    'descricao.min' => 'a descricao deve conter no minimo 30 caracteres',
                    'data_inicio.required' => 'data_inicio é  obrigatorio',
                    'data_inicio.max' => 'a data inicio de conter no maximo 5 caracteres',
                    'data_inicio.min' => 'a data inicio deve conter no maximo 9 caracteres',
                    'data_termino.required' => 'data_termino é  obrigatorio',
                    'data_termino.max' => 'a data termino de conter no maximo 5 caracteres',
                    'data_termino.min' => 'a data termino deve conter no maximo 9 caracteres',
                    'valor_projeto.required' =>'o campo projeto é obrigatorio',
                    'valor_projeto.max' => 'o campo projeto deve conter no maximo 11 caracteres',
                    'valor_projeto.min' => 'o campo projeto deve conter no minimo 11 caracteres',
                    'status.required' => 'o campo status é obrigatorio',
                    'status.max'=>'o campo status deve congter no maximo 10 caracteres',
                    'status.min'=> 'o campo deve conter no minimo 10 caracteres',
                ];
            }
        }