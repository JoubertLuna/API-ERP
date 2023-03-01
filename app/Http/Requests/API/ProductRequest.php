<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
      'produto' => "required|min:3|max:255|unique:products,produto,{$id},id",
      'eh_produto' => 'required', Rule::in(['1', '0']),
      'eh_insumo' => 'required', Rule::in(['1', '0']),
      'ativo' => 'required', Rule::in(['1', '0']),
      'valor_compra' => "required|numeric|regex:/^\d+(\.\d{1,2})?$/",
      'valor_venda' => "required|numeric|regex:/^\d+(\.\d{1,2})?$/",
      'imagem' => 'nullable|max:2048|',
      'codigo_interno' => 'nullable|min:8|max:8|',
      'gtin' => 'nullable|min:8|max:8|',
      'category_id' => 'required|exists:categories,id',
      'unity_id' => 'required|exists:unities,id',
    ];
  }
}
