<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
      'nome' => "required|min:3|max:255|unique:categories,nome,{$id},id",
      'descricao' => 'nullable|min:3|max:255|',
    ];
  }
}
