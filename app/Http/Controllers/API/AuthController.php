<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\API\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['login', 'register']]);
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);
    $credentials = $request->only('email', 'password');

    $token = Auth::attempt($credentials);
    if (!$token) {
      return response()->json([
        'status' => 'error',
        'message' => 'Não autorizado',
      ], 401);
    }

    $user = Auth::user();
    return response()->json([
      'status' => 'success',
      'user' => $user,
      'authorisation' => [
        'token' => $token,
        'type' => 'bearer',
      ]
    ]);
  }

  public function register(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
      'password' => ['required', 'string', 'min:8'],
      'password_confirm' => ['required', 'string', 'same:password', 'min:8'],
    ]);


    $user = User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
      'password_confirm' => Hash::make($request['password_confirm']),
    ]);

    $token = Auth::login($user);
    return response()->json([
      'status' => 'success',
      'message' => 'Usuário cadastrado com sucesso',
      'user' => $user,
      'authorisation' => [
        'token' => $token,
        'type' => 'bearer',
      ]
    ]);
  }

  public function logout()
  {
    Auth::logout();
    return response()->json([
      'status' => 'success',
      'message' => 'Desconectado com sucesso',
    ]);
  }

  public function refresh()
  {
    return response()->json([
      'status' => 'success',
      'user' => Auth::user(),
      'authorisation' => [
        'token' => Auth::refresh(),
        'type' => 'bearer',
      ]
    ]);
  }
}
