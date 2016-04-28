<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showAboutUs()
	{
		return View::make('aboutUs');
	}

	public function showOurJourney()
	{
		return View::make('ourJourney');
	}

	public function showContactUs()
	{
		return View::make('contactUs');
	}

	public function showPictureGallery()
	{
		return View::make('pictureGallery');
	}

	public function showObjectives()
	{
		return View::make('objectives');
	}

	public function showMembershipPolicy()
	{
		return View::make('membershipPolicy');
	}

	public function showPrivacyPolicy()
	{
		return View::make('privacyPolicy');
	}

	public function showBoardOfDirectors()
	{
		return View::make('boardOfDirectors');
	}

	public function showManagement()
	{
		return View::make('management');
	}

	public function showByLaws()
	{
		return View::make('byLaws');
	}








	public function showProjects()
	{
		return View::make('projects');
	}

	public function showResourcesAndLearning()
	{
		return View::make('ResourcesAndLearning');
	}

	public function showBulletinBoard()
	{
		return View::make('bulletinBoard');
	}

	public function showUsefulLinks()
	{
		return View::make('usefullLinks');
	}

	public function showPhoneBook()
	{
		return View::make('phonebook');
	}

	public function showImportantAnnouncements()
	{
		return View::make('importantannouncements');
	}

}
