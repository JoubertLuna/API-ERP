<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  use HasFactory;

  protected $fillable = ['eh_cliente', 'eh_fornecedor', 'eh_transportador', 'nome', 'nome_fantasia', 'cpf', 'cnpj', 'data_cadastro', 'ativo', 'fone', 'celular', 'email', 'cep', 'logradouro', 'numero', 'uf', 'cidade', 'complemento', 'bairro', 'rg'];
}
