<?php

namespace App\Repositories;

use App\Models\API\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{

  protected $entity;

  public function __construct(Contact $contact)
  {
    $this->entity = $contact;
  }


  public function getAllContacts()
  {
    return $this->entity->all();
  }
}
