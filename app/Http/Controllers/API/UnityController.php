<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UnityResource;
use App\Services\UnityService;
use Illuminate\Http\Request;

class UnityController extends Controller
{
  protected $unityService;

  public function __construct(UnityService $unityService)
  {
    $this->unityService = $unityService;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return UnityResource::collection($this->unityService->getAllUnities());
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
