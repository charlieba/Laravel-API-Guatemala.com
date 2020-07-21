<?php
Use App\promocion;
Use App\promotionDetail;
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

Route::get('promocion', 'PromocionController@index');
Route::get('promocion/{article}', 'PromocionController@show');
Route::post('promocion', 'PromocionController@store');
Route::put('promocion/{article}', 'PromocionController@update');
Route::delete('promocion/{article}', 'PromocionController@delete');


Route::get('promopromotionDetail', 'PromotionDetailController@index');
Route::get('promotionDetail/{article}', 'PromotionDetailController@show');
Route::post('promotionDetail', 'PromotionDetailController@store');
Route::put('promotionDetail/{article}', 'PromotionDetailController@update');
Route::delete('promotionDetail/{article}', 'PromotionDetailController@delete');




