<?php

class MembershipController extends \BaseController {

	public function showConvenienceStoreMembershipApplication()
	{
		return View::make('/membership/convenienceStoreMembershipApplication');
	}

	public function showNonConvenienceStoreMembershipApplication()
	{
		return View::make('/membership/nonConvenienceStoreMembershipApplication');
	}
	public function showCocaColaPdf()
	{
		return View::make('/membership/cocacola');
	}
}
