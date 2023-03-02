<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'eh_cliente' => $this->eh_cliente,
      'eh_fornecedor' => $this->eh_fornecedor,
      'eh_transportador' => $this->eh_transportador,
      'nome' => $this->nome,
      'nome_fantasia' => $this->nome_fantasia,
      'cpf' => $this->cpf,
      'cnpj' => $this->cnpj,
      'data_cadastro' => $this->data_cadastro,
      'ativo' => $this->ativo,
      'fone' => $this->fone,
      'celular' => $this->celular,
      'email' => $this->email,
      'cep' => $this->cep,
      'logradouro' => $this->logradouro,
      'numero' => $this->numero,
      'uf' => $this->uf,
      'cidade' => $this->cidade,
      'complemento' => $this->complemento,
      'bairro' => $this->bairro,
      'rg' => $this->rg,
      'data_criacao' => Carbon::parse($this->created_at)->format('d/m/Y'),
      'ultima_atualizacao' => Carbon::parse($this->updated_at)->format('d/m/Y'),
    ];
  }
}
