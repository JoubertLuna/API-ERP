<?php

namespace App\Providers;

use App\Repositories\{
  CategoryRepository,
  ContactRepository,
  ProductRepository,
  UnityRepository,
  UserRepository
};

use App\Repositories\Contracts\{
  CategoryRepositoryInterface,
  ContactRepositoryInterface,
  ProductRepositoryInterface,
  UnityRepositoryInterface,
  UserRepositoryInterface
};

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    $this->app->bind(
      CategoryRepositoryInterface::class,
      CategoryRepository::class
    );

    $this->app->bind(
      UnityRepositoryInterface::class,
      UnityRepository::class
    );

    $this->app->bind(
      UserRepositoryInterface::class,
      UserRepository::class
    );

    $this->app->bind(
      ProductRepositoryInterface::class,
      ProductRepository::class
    );

    $this->app->bind(
      ContactRepositoryInterface::class,
      ContactRepository::class
    );
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {
    //
  }
}
