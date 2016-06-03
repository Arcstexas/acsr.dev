@extends('layouts.master')

@section('content')

<br>
	<style type="text/css">
		main{
			background: white;
		}
	</style>
	<h1 style="padding-top: 100px;">vendor promotions</h1>
	<hr>
<div class="container text-center">
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/BIG-RED-June-2016-PROMOTION.pdf" target="_blank">
			<img src="{{asset('/')}}img/BigRed7up.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/COCA-COLA-JUNE-PROMOTIONS-2016.pdf" target="_blank">
			<img src="{{asset('/')}}img/coke.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/FRITO-LAY-JUNE-2016.pdf" target="_blank">
			<img src="{{asset('/')}}img/Fritolay.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<span class="clearfix"></span>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/PEPSI-ACSR-2016-JUNE-Promos.pdf" target="_blank">
			<img src="{{asset('/')}}img/sized_pepsi_logo_200w.jpg" alt="" class="img-responsive">
		</a>
	</div>

	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/NoPromotion.pdf" target="_blank">
			<img src="{{asset('/')}}img/toms.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/ACSR-Nestle-Promotion-Aug-Sept-2015.pdf" target="_blank">
			<img src="{{asset('/')}}img/NestleLogo.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<span class="clearfix"></span>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/NoPromotion.pdf" target="_blank">
			<img src="{{asset('/')}}img/Leo-logo.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/RED-BULL-NOV2015.pdf" target="_blank">
			<img src="{{asset('/')}}img/red_bull_logo.jpg" alt="" class="img-responsive">
		</a>
	</div>

	<div class="col-md-4">
		<a href="{{asset('/')}}pdf/ACSR-August-2015-Promotions-for-Snapple.pdf" target="_blank">
			<img src="{{asset('/')}}img/All_Natural_Snapple.jpg" alt="" class="img-responsive">
		</a>
	</div>
	<span class="clearfix"></span>
</div>
@stop