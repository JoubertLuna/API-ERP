<?php

namespace App\Services;

use App\Repositories\Contracts\ContactRepositoryInterface;

class ContactService
{

  private $repository;

  public function __construct(ContactRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  public function getAllContacts()
  {
    return $this->repository->getAllContacts();
  }
}
