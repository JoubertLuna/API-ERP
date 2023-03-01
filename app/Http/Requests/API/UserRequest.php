<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules()
  {
    $id = $this->segment(2);

    return [
      'name' => 'required|min:3|max:255|string',
      'email' => "required|email|max:255|string|unique:users,email,{$id},id",
      'password' => 'required|min:8|confirmed|string',
      'cpf' => 'nullable|min:14|max:14|',
      'rg' => 'nullable|min:9|max:10|',
      'fone' => 'nullable|min:14|max:14|',
      'celular' => 'nullable|min:15|max:15|',
      'cep' => 'required|min:9|max:10|',
      'logradouro' => 'nullable|max:200|',
      'numero' => 'nullable|numeric',
      'uf' => 'nullable|min:2|max:2|',
      'cidade' => 'nullable|max:200|',
      'complemento' => 'nullable|max:200|',
      'bairro' => 'nullable|max:200|',
      'image' => 'nullable|max:2048|',
      'ativo' => 'required', Rule::in(['1', '0']),
      'nascimento' => 'required|min:10|max:10|',
    ];
  }
}
