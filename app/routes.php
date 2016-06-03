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
Route::get('/byLaws', 'HomeController@showByLaws');
Route::get('/management', 'HomeController@showManagement');
Route::get('/boardOfDirectors', 'HomeController@showBoardOfDirectors');
Route::get('/privacyPolicy', 'HomeController@showPrivacyPolicy');
Route::get('/membershipPolicy', 'HomeController@showMembershipPolicy');
Route::get('/objectives', 'HomeController@showObjectives');
Route::get('/gallery', 'HomeController@showPictureGallery');
Route::get('/contactUs', 'HomeController@showContactUs');
Route::get('/ourJourney', 'HomeController@showOurJourney');
Route::get('/aboutUs', 'HomeController@showAboutUs');
Route::get('/importantAnouncements', 'HomeController@showImportantAnnouncements');
Route::get('/phoneBook', 'HomeController@showPhoneBook');
Route::get('/usefulLinks', 'HomeController@showUsefulLinks');
Route::get('/bulletinBoard', 'HomeController@showBulletinBoard');
Route::get('/resourcesAndLearning', 'HomeController@showResourcesAndLearning');
Route::get('/projects', 'HomeController@showProjects');
Route::get('/', 'HomeController@showHome');
Route::get('contact', 'HomeController@contact');

/*
 *		PDF Routes
 */
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/Coca-Cola-May2016-Promotion.pdf', 'MembershipController@showCocaColaPdf');

/* 

<a href="{{{ action('MembershipController@showConvenienceStoreMembershipApplication') }}}" target="_blank"><img src="/img/coke.jpg"></a>
create the in function being refrenced in the MebershipController.php file
create the blade file with format   somefilename.blade.php in the views/membership filder
in this file, routes.php create the route to parse, has to matche the location for public folder
*/



Route::get('/pdf/.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');
Route::get('/pdf/nonConvenienceStore.pdf', 'MembershipController@showNonConvenienceStoreMembershipApplication');

/*
 *		Vendor Routes
 */
Route::get('/vendor/rebateAndBenifits', 'VendorController@showVendorsRebateAndBenifitProgram');
Route::get('/vendor/prefferedVendors', 'VendorController@showPreferredVendors');
Route::get('/vendor/promotions', 'VendorController@showPromotions');


