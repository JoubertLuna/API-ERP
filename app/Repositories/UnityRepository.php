<?php

namespace App\Repositories;

use App\Models\API\Unity;
use App\Repositories\Contracts\UnityRepositoryInterface;

class UnityRepository implements UnityRepositoryInterface
{

  protected $entity;

  public function __construct(Unity $unity)
  {
    $this->entity = $unity;
  }


  public function getAllUnities()
  {
    return $this->entity->all();
  }
}
