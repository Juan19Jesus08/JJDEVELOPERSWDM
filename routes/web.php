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
/*RUTAS PRINCIPALES DE LA PAGINA PRINCIPAL*/


Route::get('/contact', function () {
    return view('/principal/contact');
});

//Route::get('/about', function () {
  //  return view('/principal/about');
//});


/*RUTAS DEL SERVICIO DE ENSAMBLADO*/
Route::get('/analisis_reparacion_computo', function () {
    return view('/servicios/equipo_de_computo/analisis_reparacion_computo');
});

Route::get('/ensamblado', function () {
    return view('/servicios/equipo_de_computo/ensamblado');
});

Route::get('/servicio_remoto', function () {
    return view('/servicios/equipo_de_computo/remoto');
});


/*RUTAS DEL SERVICIO DE REDES*/
Route::get('/cableado_computadoras', function () {
    return view('/servicios/instalacion_redes/cableado_computadoras');
});

Route::get('/alarmas', function () {
    return view('/servicios/instalacion_seguridad/alarmas');
});

Route::get('/videovigilancia_cctv', function () {
    return view('/servicios/instalacion_seguridad/cctv');
});


/*RUTAS DEL SERVICIO DE DESARROLLO*/
Route::get('/soluciones_escritorio', function () {
    return view('/servicios/desarrollo/escritorio');
});

Route::get('/soluciones_movil', function () {
    return view('/servicios/desarrollo/movil');
});

Route::get('/soluciones_web', function () {
    return view('/servicios/desarrollo/web');
});


Route::get('/', function () {
    return view('/principal/index');
}); //Esta ruta la ponemos en la raiz para que nada mas ejecutar nuestra aplicación aparezca nuestro formulario

Route::post('/contactar', 'EmailController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario