<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'name' => $this->name,
      'email' => $this->email,
      'cpf' => $this->cpf,
      'rg' => $this->rg,
      'fone' => $this->fone,
      'celular' => $this->celular,
      'cep' => $this->cep,
      'logradouro' => $this->logradouro,
      'numero' => $this->numero,
      'uf' => $this->uf,
      'cidade' => $this->cidade,
      'complemento' => $this->complemento,
      'bairro' => $this->bairro,
      'image' => $this->image,
      'ativo' => $this->ativo,
      'nascimento' => Carbon::parse($this->nascimento)->format('d/m/Y'),
      'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y'),
      'ultima_atualizacao' => Carbon::parse($this->updated_at)->format('d/m/Y'),
    ];
  }
}
