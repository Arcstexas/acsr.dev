<?php

class VendorController extends \BaseController {

	public function showVendorsRebateAndBenifitProgram()
	{
		return View::make('/vendor/rebateAndBenifitProgram');
	}

	public function showPreferredVendors()
	{
		return View::make('/vendor/prefferedVendors');
	}

	public function showPromotions() 
	{
		return View::make('/vendor/promotions');
	}

}
