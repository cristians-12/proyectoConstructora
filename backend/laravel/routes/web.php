<?php

use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
    return ('welcome');
});

Route::get('/usuarios', function(){
    return ('usuarios');
});

Route::get('/usuarios/{id}', function($id){
    return 'el id del usuario es '.$id;
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function(){
    return 'Crear nuevo usuario';
});
