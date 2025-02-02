<?php

use App\Http\Controllers\API\ProfilePictureUploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('v1')->as('api.v1.')->group(function () {

     Route::post('upload-profile-picture',[ProfilePictureUploadController::class,'upload_picture'])->name('upload-profile-picture');
});
