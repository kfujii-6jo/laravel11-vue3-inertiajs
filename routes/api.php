<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InertiaTestController;

Route::get("/user", function (Request $request) {
    return $request->user();
})->middleware("auth:sanctum");

Route::get("/inertia-test", [InertiaTestController::class, "index"]);
Route::post("/inertia-test", [InertiaTestController::class, "store"]);
