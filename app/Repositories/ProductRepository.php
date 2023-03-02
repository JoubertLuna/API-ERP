<?php

namespace App\Repositories;

use App\Models\API\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

  protected $entity;

  public function __construct(Product $product)
  {
    $this->entity = $product;
  }


  public function getAllProducts()
  {
    return $this->entity->all();
  }
}
