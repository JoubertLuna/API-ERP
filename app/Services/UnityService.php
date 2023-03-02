<?php

namespace App\Services;

use App\Repositories\Contracts\UnityRepositoryInterface;

class UnityService
{

  private $repository;

  public function __construct(UnityRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  public function getAllUnities()
  {
    return $this->repository->getAllUnities();
  }
}
