<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
#informações do Professor

*get('rota',function(){#o que ira acontecer})
*post('rota',function(){#o que ira acontecer})
*delete('rota',function(){#o que ira acontecer})
*put('rota',function(){#o que ira acontecer})
*path('rota',function(){#o que ira acontecer})
*options('rota',function(){#o que ira acontecer})
*match(['get','post'],'rota',function(){#o que ira acontecer})
*/

Route::get('/', function () {
    return view('welcome');
});

#interrogacao (?) apos o atributo, consegue setar um valor padrão
Route::get('/hello/{name?}',function($name = 'world'){
  return 'Hello '.$name;
});
