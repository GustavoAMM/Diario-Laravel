<?php

use App\Http\Controllers\ControladorVista;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorBD;


//Rutas resource
Route::get('recuerdo/create', [ControladorBD::class,'create'])->name('recuerdo.create');
//index
Route::get('recuerdo', [ControladorBD::class,'index'])->name('recuerdo.index');
//put
Route::put('recuerdo/{id}', [ControladorBD::class,'update'])->name('recuerdo.update');
//editar
Route::get('recuerdo/{id}/edit', [ControladorBD::class,'edit'])->name('recuerdo.edit');
//eliminar
Route::delete('recuerdo/{id}', [ControladorBD::class,'destroy'])->name('recuerdo.delete');

//rutas agrupadas
route::controller(ControladorVista::class)->group(
    function (){
        Route::get('/','showHome')->name('home');
    }
);



//store
route::post('recuerdo', [ControladorBD::class, 'store'])->name('recuerdo.store');