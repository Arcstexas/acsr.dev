@extends('layouts.master')



@section('content')

		{{-- Nav Bar Links--}}

<a href="{{{ action('HomeController@showHome') }}}">HOME</a>

<br>
<a href="{{{ action('MembershipController@showConvenienceStoreMembershipApplication') }}}">
CONVENIENCE STORE
MEMBERSHIP APPLICATION
</a>

<br>
<a href="{{{ action('MembershipController@showNonConvenienceStoreMembershipApplication') }}}">
NON-CONVENIENCE STORE
MEMBERSHIP APPLICATION
</a>

<br>
<a href="{{{ action('VendorController@showPreferredVendors') }}}">
PREFERRED VENDORS
</a>

<br>
<a href="{{{ action('VendorController@showVendorsRebateAndBenifitProgram') }}}">
VENDORS REBATE & 
BENEFIT PROGRAM
</a>

<br>
<a href="{{{ action('VendorController@showPromotions') }}}">
VENDOR’S PROMOTIONS
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
PROJECTS
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
RESOURCES AND LEARNING
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
BULLETIN BOARD
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
USEFUL LINKS
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
PHONE BOOK
</a>

<br>
<a href="{{{ action('HomeController@showHome') }}}">
IMPORTANT 
ANNOUNCEMENTS	 
</a>	

		{{-- Footer Links--}}




@stop