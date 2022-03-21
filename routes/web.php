<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get("/", [FormController::class, "welcomePage"]);
//Route::get("list-publication", [FormController::class, "useProject"]);

//test
//Route::get("show-index", [FormController::class, "index"]);

Route::get("list-publication/{proj_id}",[FormController::class, "listPublication"]);
Route::get("edit-publication/{pub_id}", [FormController::class, "myForm"]);
Route::post("edit-publication/{pub_id}", [FormController::class, "update"]);
Route::get("new-publication", [FormController::class, "newPub"])->name('newPublication');
Route::post("new-publication", [FormController::class, "store"]);
Route::get('new-publication/back-home',[FormController::class,'welcomePage'])->name('submit');
Route::post('new-publication/back-home',[FormController::class,'welcomePage'])->name('welcome');
Route::get('success',[FormController::class,'submit'])->name('successEdit');
Route::post("success", [FormController::class, "submit"])->name('successEdit');

//Route::get("submit", [FormController::class, "store"]);

//Route::get("data-submitted", [FormController::class, "dataSubmitted"]);


