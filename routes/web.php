<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Alumni_formController;
use App\Http\Controllers\ControllerRegform;
use App\Http\Controllers\CsvController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/uploddata', [CsvController::class, 'uploddata']);

Route::post('/upload-csv', [CsvController::class, 'uploadCsv'])->name('upload.csv');

Route::get('/csv-upload', function () {
    return view('csv-upload'); // Blade view with the form
});


Route::get('/alumniform', [Alumni_formController::class, 'alumniForm']);
Route::get('/registrationform',[ControllerRegform::class, 'aluminReg']);// new form for insertion
Route::post('/url_reg_insert',[ControllerRegform::class, 'nameInsert']);//insertOrCreate
Route::get('/formList',[ControllerRegform::class, 'empList']);// for list view

Route::get('/edit/{id}',[ControllerRegform::class, 'formEdit']);//for edit form

Route::post('/edit_a/{id}',[ControllerRegform::class, 'formUpdate']);

Route::get('/delete/{id}',[ControllerRegform::class, 'formdelete']);

Route::get('/get-taluk/{id}',[ControllerRegform::class, 'GetTaluk']);
Route::get('/get-village/{id2}',[ControllerRegform::class, 'GetVillage']);