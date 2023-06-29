<?php

use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SurveyController::class, 'index'])->name('survey.index');

Route::post('/begun', [SurveyController::class, 'begun'])->name('survey.begun');

Route::get('/survey/{survey:link}', [SurveyController::class, 'show'])->name('survey.show');

Route::post('/survey/{survey:link}/vote', [SurveyController::class, 'vote'])->name('survey.vote');
