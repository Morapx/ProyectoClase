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


/*Route::get('/', function () {
    return view('welcome');
});*/

/*route::get('/', function () {
    return 'ola k ase';
});*/

/*route::get('/', function (){
    return [
        'clases' =>[
            'instalacion de Laravel',
            'Rutas basicas de Laravel',
            'Controles de Laravel',
        ]
    ];
});*/



/*route::get('clases', function(){
    return 'aqui se instalarian las clases';
});*/

/*route::get('clases/crear', function(){
    return 'aqui se crean las clases';
});*/

/*route::get('clases/{id}/editar', function($id){
    return 'aqui se instalaria las clases' .$id;
});*/

route::get('notas/nombre/{id}', function($id){
    return 'aqui se nombran las id a las notas' .$id;
});

route::get('notas/crear', function(){
    return 'aqui se crean las notas';
});

route::get('notas/lista', function (){
    return [
        'notas' =>[
            'comprar huevos',
            'Comprar leche',
            'Comprar cilantro',
            'comprar galletas emperador',
        ]
    ];
});

route::get('notas/editar', function(){
    return 'aqui se editan las notas';
});

