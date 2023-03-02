<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'produto' => $this->produto,
      'eh_produto' => $this->eh_produto,
      'eh_insumo' => $this->eh_insumo,
      'valor_compra' => $this->valor_compra,
      'valor_venda' => $this->valor_venda,
      'codigo_interno' => $this->codigo_interno,
      'gtin' => $this->gtin,
      'imagem' => $this->imagem ? Storage::url($this->imagem): '',
      'ativo' => $this->ativo,
      'category_id' => $this->category_id,
      'unity_id' => $this->unity_id,
      'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y'),
      'ultima_atualizacao' => Carbon::parse($this->updated_at)->format('d/m/Y'),
    ];
  }
}
