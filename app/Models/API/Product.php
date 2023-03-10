<?php

namespace App\Models\API;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['produto', 'eh_produto', 'eh_insumo', 'preco', 'imagem', 'ativo', 'unity_id', 'category_id'];

  #Relecionamentos
  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  #Relecionamentos
  public function unity()
  {
    return $this->belongsTo(Unity::class);
  }
}
