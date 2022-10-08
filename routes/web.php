<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InviteController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::get("/allEvents",[HomeController::class,"allEvents"])->name("allEvents");
Route::get("/viewEvents/{id}/",[HomeController::class,"viewEvent"])->name("viewEvents");
Route::match(["get","post"],"/user/login",[AuthController::class,"login"])->name("user.login");
Route::match(["get","post"],"/user/register",[AuthController::class,"register"])->name("user.register");
Route::get("/user/logout",[AuthController::class,"logout"])->name("user.logout");
Route::resource("events",EventController::class);
Route::resource("invites",InviteController::class);
