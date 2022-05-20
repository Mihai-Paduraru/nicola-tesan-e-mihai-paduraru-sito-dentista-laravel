<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'showHomepage'])->name('home');

Route::get('/chisiamo', [PublicController::class, 'showChisiamo'])->name('description');

Route::get('/servizi', [PublicController::class, 'showServizi'])->name('service');

Route::get('/contatti', [PublicController::class, 'showContatti'])->name('contact');

Route::post('/contatti/submit', [PublicController::class, 'contactSubmit'])->name('contatti.submit');