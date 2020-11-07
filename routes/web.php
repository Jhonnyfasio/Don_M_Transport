<?php

//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EmployeesController;

//use App\EmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//CRUD CreateEmployeesTable

Route::get('/bienvenida/{name}/{firstname?}', function($name, $firstname = null){
  return view('bienvenida', compact('name','firstname'));
});
/*
// Listado de Employees
Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index']);
// Mostrar Formulario
Route::get('/employees/create', [App\Http\Controllers\EmployeesController::class, 'create']);
// Mostrar detalle de grabacion
Route::get('/employees/{employee}', [App\Http\Controllers\EmployeesController::class, 'show']);
// Guardar a la DB el registro de empleados
Route::post('/employees',[App\Http\Controllers\EmployeesController::class, 'store']);
// Editar Employees
Route::get('/employees/{employee}/edit', [App\Http\Controllers\EmployeesController::class, 'edit']);
// Actualizar registro a DB
Route::post('/employees/{employee}', [App\Http\Controllers\EmployeesController::class, 'update']);
// Eliminar registro
//Route::post('/employees/{employee}/delete', [EmployeesController::class, 'destroy'])
*/
Route::resource('/employees', EmployeesController::class);
