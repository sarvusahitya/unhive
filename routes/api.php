<?php

use App\Http\Controllers\ContactProductController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\OnBoardingFormController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('onboardingstep1', [OnBoardingFormController::class, 'OnboardingStep1']);
Route::post('onboardingstep2', [OnBoardingFormController::class, 'UpdateOnboardingStep2']);
Route::post('onboardingstep3', [OnBoardingFormController::class, 'UpdateOnboardingStep3']);
Route::post('uploaddocuments', [OnBoardingFormController::class, 'UploadDocuments']);
Route::get('/search-contacts', [ContactsController::class, 'search']);
Route::post('/productbyguid', [ProductsController::class, 'searchByGuid']);
Route::post('/getallproductsbycategory', [ProductsController::class, 'getAllProductByCategory']);

Route::post('/search-products', [ProductsController::class, 'search']);
Route::post('/contact/product', [ContactProductController::class, 'addOrUpdateProduct']);
Route::post('/updatequantity', [ProductsController::class, 'updateQuantity']);
Route::post('/getcontactproductdata', [ProductsController::class, 'getContactProductData']);
Route::post('/getproductallcategory', [ProductsController::class, 'getGroupByProductCategory']);
Route::post('/generateexportretailer', [ContactProductController::class, 'generateExportRetailer']);


Route::get('/retailerlist', [ContactsController::class, 'retailerList']);
Route::post('/getcontactbyguid', [ContactsController::class, 'getContactByGuid']);
