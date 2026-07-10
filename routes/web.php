<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::get('/about', [SiteController::class, 'index']);




Route::get('/contato', function (){
    return view('contato');
});
