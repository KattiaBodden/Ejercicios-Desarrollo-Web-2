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

/** EJERCICIOS JUEVES 25 FEB**/
/*
//Retorna una vista
Route::get('/', function () {
    return view('welcome');
});
//Retorna el mensaje que escriba
Route::get('/', function () {
    return "Hola bienvenido a mi sitio";
});
//Retorna lo que se guarde en la variable nombre
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Saludos " .$nombre;
});

/** EJERCICIOS LUNES 1 MARZO **/
/*
//Rutas con nombre
Route::get('/contacto', function () {
    return "Seccion de Contacto";
});

Route::get('/', function () {
    echo "<a href ='contacto'>Contacto 1 </a><br>";
    echo "<a href ='contacto'>Contacto 2 </a><br>";
    echo "<a href ='contacto'>Contacto 3 </a><br>";
});

Route::get('/contacto', function () {
    return "Seccion de Contacto";
})->name('Contacto');

Route::get('/', function () {
    echo "<a href = ". route('Contacto').">Contacto 1 </a><br>";
    echo "<a href ='contacto'>Contacto 2 </a><br>";
    echo "<a href ='contacto'>Contacto 3 </a><br>";
});

/** EJERCICIOS MARTES 2 MARZO **/

/*Route::get('/', function () {
    $nombre = "Kattia";
    return view('home')->with('nombre', $nombre);
});

//Retorna la vista de home
Route::get('/', function () {
    return view('home');
})->name('home');


//Para mandar a llamarlas en HTML
Route::view('/', 'home')->name('home');
Route::view('/', 'acerca')->name('acerca');
Route::view('/', 'portafolio')->name('portafolio');
Route::view('/', 'contacto')->name('contacto');*/

/** EJERCICIOS MARTES 3 MARZO **/

//route:: view('/', 'home');
Route::view('/', 'home')->name('home');
Route::view('/acerca', 'acerca')->name('acerca');
Route::view('/Portafolio', 'portafolioController@index')->name('Portafolio');
Route::view('/contactos', 'contactos')->name('contactos');

Route::view('/contactos', 'messController@store')->name('Contact');
