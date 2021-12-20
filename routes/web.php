<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/task', function () {
    $data=App\Models\Task::all();
    return view('tasks')->with('tasks',$data);
});
Route::post('/addtask','App\Http\Controllers\Taskcontroller@store');

Route::post('/markascompleted/{id}','App\Http\Controllers\Taskcontroller@taskascompleted');

Route::post('/removetask/{id}','App\Http\Controllers\Taskcontroller@removetask');

Route::get('/form', function () {
    return view('form');
});

Route::post('/insert','App\Http\Controllers\formcontroller@insertdata');

Route::post('/update','App\Http\Controllers\formcontroller@updatedata');

Route::post('/delete','App\Http\Controllers\formcontroller@deletedata');
