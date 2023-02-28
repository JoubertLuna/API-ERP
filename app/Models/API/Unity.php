<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
  use HasFactory;

  protected $fillable = ['nome', 'descricao'];

  #Relecionamentos
  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
