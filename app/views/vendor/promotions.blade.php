@extends('layouts.master')

@section('content')

<br>
	<style type="text/css">
		main{
			background: white;
		}
	</style>
	<h1 style="padding-top: 100px;">vendor promotions</h1>

	<a href="{{{ action('MembershipController@showCocaColaPdf') }}}" target="_blank"><img src="/img/coke.jpg"></a>
	<a href="{{{ action('MembershipController@showBigRedPdf') }}}" target="_blank"><img src="/img/coke.jpg"></a>


@stop