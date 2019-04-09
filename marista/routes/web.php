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
    return view('login');
})->name('verlogin');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/cerrar_sesion','Auth\LoginController@logout')->name('logout');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/historiaClinica','HistoriaClinicaController@index')->name('showHistoriaClinica');

Route::get('/historiaClinica/ant_fam',function(){
  return view('antecedentes_familiares');
});

Route::get('/historiaClinica/ant_pers',function(){
  return view('antecedentes_personales');
});

Route::get('/historiaClinica/nuevo_pad',function(){
  return view('nuevo_padecimiento');
});

Route::get('/historiaClinica/sintomas',function(){
  return view('sintomas');
});

Route::get('/registroServidorSocial',function(){
  return view('registroServidorSocial');
});

Route::get('/registroMedico','MedicoController@showRegistro')->name('registroMedico');

Route::post('/registroMedico','MedicoController@registro')->name('insertarMedico');

Route::get('/registroPasante',function(){
  return view('registroPasante');
});

Route::get('/datosPersonales','DatosPersonalesController@index')->name('showDatosPersonales');

Route::get('/datosPersonalesAdmin','DatosPersonalesController@admin')->name('showDatosPersonalesAdmin');

Route::get('/pacientes','PacientesController@index')->name('showPacientes');

Route::post('/pacientes','PacientesController@registrarPaciente')->name('registrarPaciente');

Route::post('/registroUsuario','DatosPersonalesController@registrarUsuario')->name('registrarUsuario');


Route::get('/Consulta','ConsultaController@index')->name('showConsuta');

Route::get('/calendario','CalendarioController@index')->name('showCalendario');

Route::get('/cita', function () {
  return view('cita');
});
