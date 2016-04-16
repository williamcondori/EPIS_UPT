<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/** Rutas de las páginas del gestor de contenidos */
Route::get('gestion', 'Administracion\AdministracionController@index');
Route::get('gestion/nosotros', 'Administracion\AdministracionController@nosotros');
Route::get('gestion/acreditacion', 'Administracion\AdministracionController@acreditacion');
Route::get('gestion/informacion', 'Administracion\AdministracionController@informacion');
Route::get('gestion/actividades', 'Administracion\AdministracionController@actividades');
Route::get('gestion/documentos', 'Administracion\AdministracionController@documentos');

/** Rutas por recursos */
Route::resource('gestion/usuario', 'Administracion\UsuarioController');

Route::resource('gestion/presentacion', 'Administracion\PresentacionController');
Route::resource('gestion/palabra', 'Administracion\PalabraController');
Route::resource('gestion/mision', 'Administracion\MisionController');
Route::resource('gestion/vision', 'Administracion\VisionController');
Route::resource('gestion/objetivo', 'Administracion\ObjetivoController');
Route::resource('gestion/perfil', 'Administracion\PerfilController');
Route::resource('gestion/docente', 'Administracion\DocenteController');
Route::resource('gestion/infraestructura', 'Administracion\InfraestructuraController');
Route::resource('gestion/servicio', 'Administracion\ServicioController');
Route::resource('gestion/proyecto', 'Administracion\ProyectoController');
Route::resource('gestion/convenio', 'Administracion\ConvenioController');

Route::resource('gestion/acreditacionescuela', 'Administracion\AcreditacionescuelaController');
Route::resource('gestion/autoevaluacion', 'Administracion\AutoevaluacionController');
Route::resource('gestion/comite', 'Administracion\ComiteController');
Route::resource('gestion/objetivoeducacional', 'Administracion\ObjetivoeducacionalController');
Route::resource('gestion/resultadoestudiante', 'Administracion\ResultadoestudianteController');

Route::resource('gestion/centro', 'Administracion\CentroController');

Route::resource('gestion/noticia', 'Administracion\NoticiaController');
Route::resource('gestion/evento', 'Administracion\EventoController');
Route::resource('gestion/comunicado', 'Administracion\ComunicadoController');
Route::resource('gestion/actualidad', 'Administracion\ActualidadController');
Route::resource('gestion/publicacion', 'Administracion\PublicacionController');
Route::resource('gestion/galeria', 'Administracion\GaleriaController');

Route::resource('gestion/documentoestudiante', 'Administracion\documentoestudianteController');
Route::resource('gestion/documentodocente', 'Administracion\documentodocenteController');
Route::resource('gestion/reglamento', 'Administracion\reglamentoController');
Route::resource('gestion/directiva', 'Administracion\directivaController');
Route::resource('gestion/tramite', 'Administracion\tramiteController');
Route::resource('gestion/brochure', 'Administracion\brochureController');


Route::resource('gestion/elementogaleria', 'Administracion\ElementogaleriaController');
Route::resource('gestion/galeria.detail', 'Administracion\ElementogaleriaController');
	
