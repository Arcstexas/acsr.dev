<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
 *		Home Routes
 */
Route::get('/', 'HomeController@showHome');

/*
 *		Membership Routes
 */
Route::get('/membership/convenienceStore', 'MembershipController@showConvenienceStoreMembershipApplication');
Route::get('/membership/nonConvenienceStore', 'MembershipController@showNonConvenienceStoreMembershipApplication');

/*
 *		Vendor Routes
 */
Route::get('/vendor/rebateAndBenifits', 'VendorController@showVendorsRebateAndBenifitProgram');
Route::get('/vendor/prefferedVendors', 'VendorController@showPreferredVendors');
Route::get('/vendor/promotions', 'VendorController@showPromotions');


