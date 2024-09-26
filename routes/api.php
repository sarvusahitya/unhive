<?php

use App\Http\Controllers\OnBoardingFormController;
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
