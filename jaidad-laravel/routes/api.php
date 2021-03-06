<?php

use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\FeatureDetailController;
use App\Http\Controllers\Api\PropertyController;
use App\Models\FeatureDetail;
use App\Models\Property;
use App\Models\PropertyGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard',[PropertyController::class,'dashboard']);

// PROPERTY ROUTES
Route::get('/properties',[PropertyController::class,'dataTable'])->name('properties');
Route::get('/properties/all',[PropertyController::class,'index'])->name('properties.all');
Route::get('/property/{property}',[PropertyController::class,'show'])->name('property');
Route::post('/property',[PropertyController::class,'store'])->name('store.property');
Route::delete('/property/{property}/delete',[PropertyController::class,'delete'])->name('delete.property');
Route::put('/property/{property}/update',[PropertyController::class,'update'])->name('update.property');
Route::post('property/featured/{property}',[PropertyController::class,'featured']);
Route::post('property/status/{property}',[PropertyController::class,'status']);

// Property Features
Route::get('/property/{property}/features',[PropertyController::class,'showFeatures'])->name('property.features');

// FEATURE ROUTES
Route::get('/features',[FeatureController::class,'index'])->name('features');
Route::post('/feature',[FeatureController::class,'store'])->name('store.feature');
Route::get('/feature/{feature}',[FeatureController::class,'show'])->name('feature');
Route::delete('/feature/{feature}/delete',[FeatureController::class,'delete'])->name('delete.feature');
Route::put('/feature/{feature}/update',[FeatureController::class,'update'])->name('update.feature');
Route::get('/features/datatable',[FeatureController::class,'dataTable'])->name('features.datatable');

Route::get('/feature-details',[FeatureDetailController::class,'index'])->name('feature_details');
Route::post('/feature-detail',[FeatureDetailController::class,'store'])->name('feature_detail.store');
Route::put('/feature-detail/{feature_detail}/update',[FeatureDetailController::class,'update'])->name('update.feature');
Route::delete('/feature-detail/{feature_detail}/delete',[FeatureDetailController::class,'destroy'])->name('delete.feature-detail');
Route::get('/feature-details/datatable',[FeatureDetailController::class,'dataTable'])->name('feature-details.datatable');
