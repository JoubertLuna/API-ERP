<?php

namespace App\Models\API;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['nome', 'descricao'];

  #Relecionamentos
  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
