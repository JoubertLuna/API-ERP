<?php

namespace App\Repositories;

use App\Models\API\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

  protected $entity;

  public function __construct(User $user)
  {
    $this->entity = $user;
  }


  public function getAllUsers()
  {
    return $this->entity->all();
  }
}
