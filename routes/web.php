<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaEducativaController;
use App\Http\Controllers\DatosPlanController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\SemesteController;

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
/*
Route::get('/MedicinaUAZ', function () {
    return view('index');
});*/
Route::get('/mision', function () {
    return view('mision.index');
});
Route::get('/historia', function () {
    return view('historia.index');
});
Route::get('/directorio', function () {
    return view('directorio.index');
});
Route::get('/HCUnidad', function () {
    return view('CUnidad.index');
});
Route::get('/direccion', function () {
    return view('direccion.index');
});
Route::get('/log', function () {
    return view('login');
});


/*Route::get('/', function () {
    return view('login');
});*/

/*
Route::get('/OfertaEducativa', function () {
    return view('ofertas.index',$ofertas);
});*/

Route::get('/OfertaEducativa', function () {
    return view('ofertas.create',$ofertas);
});

Route::get('/OfertaEducativa', function () {
    return view('ofertas.edit',$ofertas);
});

/*
Route::get('DatosPlan', function () {
    return view('datos_plan.edit',$datos,$ofertas);
});*/
Route::get('DatosPlan/', function () {
  return view('datos_plan.create',$ofertas);
});

Route::resource('OfertaEducativa',OfertaEducativaController::class);
Route::resource('DatosPlan',DatosPlanController::class);
Route::resource('CargaAcademica',MateriasController::class);
Route::resource('Semestre',SemesteController::class);

/*
Route::get('CargaAcademica', function () {
  return view('carga_academica.index',$ofertas);

});*/

Route::get('DatosPlanAdmin/{DatosPlan}/plan', [App\Http\Controllers\DatosPlanController::class, 'showData']);
Route::get('DatosPlan/{DatosPlan}/plan', [App\Http\Controllers\PublicInfo::class, 'info']);
Route::get('MedicinaUAZ/', [App\Http\Controllers\PublicInfo::class, 'home']);


/*
Route::get('DatosPlan/', function () {
  return view('ofertas.show',['plan'=>$plan,'datos'=>$datos,'materias'=>$materias],$ofertas);
});*/
/*Route::get('DatosPlan', [App\Http\Controllers\DatosPlanController::class, 'show']);*/
/*
Route::get('DatosPlan/', function () {

  return view('ofertas.show',$plan,$datos,$s1,$ofertas);
  //return view('ofertas.show',['plan'=>$plan,'datos'=>$datos,'s1'=>$s1],$ofertas);

});*/
/*Route::get('OfertaEducativa/create',[OfertaEducativaController::class,'create'],$ofertas);*/

/*Route::get('OfertaEducativa/create',[OfertaEducativaController::class,'create']);*/


/*Route::delete('OfertaEducativa',[OfertaEducativaController::class,'destroy']);*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
