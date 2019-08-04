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
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('cursos/editar/{curso}', 'CursoController@edit');
Route::get('cursos/lista', 'CursoController@list');
Route::get('cursos/crear', 'CursoController@create');
Route::get('cursos', 'CursoController@index');
Route::get('cursos/{curso}', 'CursoController@show');
Route::post('cursos', 'CursoController@store');
Route::patch('cursos/{curso}', 'CursoController@update');
Route::delete('cursos/{curso}', 'CursoController@destroy');


Route::get('niveles/editar/{nivel}', 'NivelController@edit');
Route::get('niveles/lista', 'NivelController@list');
Route::get('niveles', 'NivelController@index1');
Route::get('niveles/crear', 'NivelController@create');
Route::get('niveles/{nivel}', 'NivelController@show');
Route::post('niveles', 'NivelController@store');
Route::patch('niveles/{nivel}', 'NivelController@update');
Route::delete('niveles/{nivel}', 'NivelController@destroy');
// lECCIONES.
Route::get('lecciones/editar/{leccion}', 'LeccionController@edit');
Route::get('lecciones/lista', 'LeccionController@list');
Route::get('lecciones', 'LeccionController@index1');
Route::get('lecciones/crear', 'LeccionController@create');
Route::get('lecciones/{leccion}', 'LeccionController@show');
Route::post('lecciones', 'LeccionController@store');
Route::patch('lecciones/{leccion}', 'LeccionController@update');
Route::delete('lecciones/{leccion}', 'LeccionController@destroy');


  //L E N G U A S
  Route::get('lenguas/editar/{lengua}', 'LenguaController@edit');
  Route::get('lenguas/lista', 'LenguaController@list');
  Route::get('lenguas/crear', 'LenguaController@create');
  Route::get('lenguas', 'LenguaController@index');
  Route::get('lenguas/{lengua}', 'LenguaController@show');
  Route::post('lenguas', 'LenguaController@store');
  Route::patch('lenguas/{lengua}', 'LenguaController@update');
  Route::delete('lenguas/{lengua}', 'LenguaController@destroy');


  //D E S A R R O L L A D O R E S
  Route::get('desarrolladores/editar/{desarrollador}', 'DesarrolladorController@edit');
  Route::get('desarrolladores/lista', 'DesarrolladorController@list');
  Route::get('desarrolladores/crear', 'DesarrolladorController@create');
  Route::get('desarrolladores', 'DesarrolladorController@index');
  Route::get('desarrolladores/{desarrollador}', 'DesarrolladorController@show');
  Route::post('desarrolladores', 'DesarrolladorController@store');
  Route::patch('desarrolladores/{desarrollador}', 'DesarrolladorController@update');
  Route::delete('desarrolladores/{desarrollador}', 'DesarrolladorController@destroy');


   // D E P A R T A M E N T O
   Route::get('departamentos/editar/{departamento}', 'DepartamentoController@edit');
   Route::get('departamentos/lista', 'DepartamentoController@list');
   Route::get('departamentos', 'DepartamentoController@index');
   Route::get('departamentos/crear', 'DepartamentoController@create');
   Route::get('departamentos/{departamento}', 'DepartamentoController@show');
   Route::post('departamentos', 'DepartamentoController@store');
   Route::patch('departamentos/{departamento}', 'DepartamentoController@update');
   Route::delete('departamentos/{departamento}', 'DepartamentoController@destroy');


   //SEXOS
   Route::get('sexos/editar/{sexo}', 'SexoController@edit');
   Route::get('sexos/lista', 'SexoController@list');
   Route::get('sexos/crear', 'SexoController@create');
   Route::get('sexos', 'SexoController@index');
   Route::get('sexos/{sexo}', 'SexoController@show');
   Route::post('sexos', 'SexoController@store');
   Route::patch('sexos/{sexo}', 'SexoController@update');
   Route::delete('sexos/{sexo}', 'SexoController@destroy');
   Route::get('areas', 'AreaController@index');
   Route::get('areas/{id}', 'AreaController@show');



   // M U N I C I P I O S
   Route::get('municipios/editar/{municipio}', 'MunicipioController@edit');
   Route::get('municipios/lista', 'MunicipioController@list');
   Route::get('municipios/crear', 'MunicipioController@create');
   Route::get('municipios', 'MunicipioController@index');
   Route::get('municipios/{municipio}', 'MunicipioController@show');
   Route::post('municipios', 'MunicipioController@store');
   Route::patch('municipios/{municipio}', 'MunicipioController@update');
   Route::delete('municipios/{municipio}', 'MunicipioController@destroy');

      // P E R F I L E S
      Route::get('perfiles/editar/{perfil}', 'PerfilController@edit');
      Route::get('perfiles/lista', 'PerfilController@list');
      Route::get('perfiles/crear', 'PerfilController@create');
      Route::get('perfiles', 'PerfilController@index');
      Route::get('perfiles/{perfil}', 'PerfilController@show');
      Route::post('perfiles', 'PerfilController@store');
      Route::patch('perfiles/{perfil}', 'PerfilController@update');
      Route::delete('perfiles/{perfil}', 'PerfilController@destroy');


    // S E X O S
    Route::get('sexos/editar/{sexo}', 'SexoController@edit');
    Route::get('sexos/lista', 'SexoController@list');
    Route::get('sexos/crear', 'SexoController@create');
    Route::get('sexos', 'SexoController@index');
    Route::get('sexos/{sexo}', 'SexoController@show');
    Route::post('sexos', 'SexoController@store');
    Route::patch('sexos/{sexo}', 'SexoController@update');
    Route::delete('sexos/{sexo}', 'SexoController@destroy');



    // P A I S E S
    Route::get('paises/editar/{sexo}', 'PaisController@edit');
    Route::get('paises/lista', 'PaisController@list');
    Route::get('paises/crear', 'PaisController@create');
    Route::get('paises', 'PaisController@index');
    Route::get('paises/{pais}', 'PaisController@show');
    Route::post('paises', 'PaisController@store');
    Route::patch('paises/{pais}', 'PaisController@update');
    Route::delete('paises/{pais}', 'PaisController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
