<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});



Route::middleware('auth:api')->group(function () {
    Route::apiResource('employees', EmployeeController::class);

    Route::delete('employees/{employee}/force', [EmployeeController::class, 'forceDelete']);

    Route::put('employees/{employee}/restore', [EmployeeController::class, 'restore']);

    Route::apiResource('departments', DepartmentController::class);

    Route::delete('departments/{department}/force', [DepartmentController::class, 'forceDelete']);

    Route::put('departments/{department}/restore', [DepartmentController::class, 'restore']);
});
