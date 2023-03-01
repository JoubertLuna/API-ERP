<?php

use App\Http\Controllers\API\{
  AuthController,
  CategoryController,
  ContactController,
  ProductController,
  UnityController,
  UserController,
};

use Illuminate\Support\Facades\Route;

Route::get('', function () {

  return response()->json([
    'success' => true,
  ]);
});

#Route Login
Route::post('/auth/login', [AuthController::class, 'login']);

#Route Register
Route::post('/auth/register', [AuthController::class, 'register']);

//Middleware
Route::middleware('auth:api')->group(function () {

  #Route Refresh
  Route::post('/auth/refresh', [AuthController::class, 'refresh']);

  #Route Logout
  Route::post('/auth/logout', [AuthController::class, 'logout']);

  #Cadastros Base { category / unity / product / contact / user }
  Route::resource('category', CategoryController::class);
  Route::resource('unity', UnityController::class);
  Route::resource('product', ProductController::class);
  Route::resource('contact', ContactController::class);
  Route::resource('user', UserController::class);
  #Cadastros Base { category / unity / product / contact / user }
});
