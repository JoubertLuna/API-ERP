<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
  public function rules(): array
  {
    $id = $this->segment(2);

    return [
      'nome' => "required|min:3|max:255|unique:contacts,nome,{$id},id",
      'eh_fornecedor' => 'nullable', Rule::in(['1', '0']),
      'eh_transportador' => 'nullable', Rule::in(['1', '0']),
      'eh_cliente' => 'nullable', Rule::in(['1', '0']),
      'nome_fantasia' => 'nullable|min:3|max:255|',
      'cpf' => 'nullable|min:14|max:14|',
      'cnpj' => 'nullable|min:18|max:18|',
      'data_cadastro' => 'required|min:10|max:10|',
      'ativo' => 'required', Rule::in(['1', '0']),
      'fone' => 'nullable|min:14|max:14|',
      'celular' => 'nullable|min:15|max:15|',
      'email' => "required|string|email|min:3|max:255|unique:contacts,email,{$id},id",
      'cep' => 'required|min:9|max:10|',
      'logradouro' => 'nullable|max:200|',
      'numero' => 'nullable|numeric',
      'uf' => 'nullable|min:2|max:2|',
      'cidade' => 'nullable|max:200|',
      'complemento' => 'nullable|max:200|',
      'bairro' => 'nullable|max:200|',
      'rg' => 'nullable|min:9|max:10|',
    ];
  }
}