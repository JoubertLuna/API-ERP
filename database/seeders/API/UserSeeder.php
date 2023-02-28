<?php

namespace Database\Seeders\API;

use App\Models\API\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    User::create([
      'name' => 'Administrador - ERP',
      'email' => 'administrador@erp.com',
      'password' => Hash::make('@admin123'),
    ]);
  }
}
