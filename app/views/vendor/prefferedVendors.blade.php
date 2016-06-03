@extends('layouts.master')

@section('content')
	<style>
		h1{
			color: white;
		}

		table{
			font-size: 14px;
		}
	</style>

	<h1 style="padding-top: 100px;">Prefferd Vendors</h1>
	<hr>
	<div class="container text-center">
		<table class="table table-hover">
			{{--<tr >--}}
				{{--<td colspan="4">7- GAMES, INC. - LOW RIDER SUN GLASSES </td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">STEVEN GAMEZ <br>OWNER</td>--}}
			{{--</tr>--}}
			<tr>
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>7- GAMES, INC. - LOW RIDER SUN GLASSES </td>
				<td>STEVEN GAMEZ <br>OWNER</td>
				<td></td>
				<td>(713) 269-4382</td>
				<td></td>
				<td>sgamez@comcast.net</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">A-1 BACK FLOW SYSTEMS</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">ROBERT MOORE<br>OWNER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>A-1 BACK FLOW SYSTEMS</td>
				<td>ROBERT MOORE<br>OWNER</td>
				<td>(210) 490-8474</td>
				<td>(210) 602-6769</td>
				<td>(830) 227-5291</td>
				<td>rkm437@yahoo.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">ADP – PAYROLL SERVICES</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">NICK DAVIE<br>KEY ACCOUNT MANAGER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>ADP – PAYROLL SERVICES</td>
				<td>NICK DAVIE<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 491-5472</td>
				<td>(903) 780-0841</td>
				<td>(210) 491-5495</td>
				<td>nick_davie@adp.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">AMN TRADERS – KING HENRY SNACKS</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">ABDUL GHAFOOR<br>Owner</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>AMN TRADERS – KING HENRY SNACKS</td>
				<td>ABDUL GHAFOOR<br>Owner</td>
				<td></td>
				<td>(210) 867-4919</td>
				<td>(210) 614-0774</td>
				<td>amntraders@gmail.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">BIG RED</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">RICK PEREZ<br>REGIONAL ACCOUNTS EXECUTIVE</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>BIG RED</td>
				<td>RICK PEREZ<br>REGIONAL ACCOUNTS EXECUTIVE</td>
				<td>(210) 662-4415</td>
				<td>(210) 662-4415</td>
				<td>(210) 666-0944</td>
				<td>rick.perez@dpsg.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">COCA-COLA</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">CRAIG LEONARDO <br>KEY ACCOUNT MANAGER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>COCA-COLA</td>
				<td>CRAIG LEONARDO <br>KEY ACCOUNT MANAGER</td>
				<td>(512) 836-7272</td>
				<td>(512) 484-3574</td>
				<td>(512) 832-2615</td>
				<td>cleonordo@coca-cola.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">DEL NORTE FOODS</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">KARLA ESCOTTO<br>KEY ACCOUNT MANAGER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>DEL NORTE FOODS</td>
				<td>KARLA ESCOTTO<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 655-7673</td>
				<td>(210) 286-4547</td>
				<td>(210) 655-7676</td>
				<td>karlaescotto@delnortefoods.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">FINALE FRAGRANCE CO. - PERFUMES</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">DEBRA CALLAHAN<br>OWNER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>FINALE FRAGRANCE CO. - PERFUMES</td>
				<td>DEBRA CALLAHAN<br>OWNER</td>
				<td></td>
				<td>(210) 614-6767</td>
				<td></td>
				<td>debra@finalefragrance.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">FRITO LAY</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">JESSIE APOLINAR<br>KEY ACCOUNT MANAGER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>FRITO LAY</td>
				<td>JESSIE APOLINAR<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 662-2035</td>
				<td>(210) 849-5543</td>
				<td>(210) 662-2056	</td>
				<td>jessie.j.apolinar@fritolay.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">INFINITE PREPAID SERVICES - PHONE CARDS</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">RON PETHICK<br>OWNER</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>INFINITE PREPAID SERVICES - PHONE CARDS</td>
				<td>RON PETHICK<br>OWNER</td>
				<td>(210) 341-3900</td>
				<td>(210) 849-8949</td>
				<td>(210) 341-3931</td>
				<td>infiniteprepaid@satx.rr.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">OAK FARMS DAIRY</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">ANTHONY FLORES<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>OAK FARMS DAIRY</td>
				<td>ANTHONY FLORES<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 732-1111</td>
				<td>(210) 559-1408</td>
				<td>(210) 737-2534</td>
				<td>anthony_flores@deanfoods.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">PEPSI</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">MICHAEL APOLINAR<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>PEPSI</td>
				<td>MICHAEL APOLINAR<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 662-3464</td>
				<td>(210) 825-0267</td>
				<td>(210) 662-3430</td>
				<td>michaelapolinar@pepsico.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">Red Bull Distribution Company--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">--}}
					{{--Kendra Davis--}}
					{{--<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>Red Bull Distribution Company</td>
				<td>Kendra Davis
					<br>KEY ACCOUNT MANAGER
				</td>
				<td>(210) 661-6664</td>
				<td>(210) 784-7180</td>
				<td>(210) 661-6491</td>
				<td>kendra.davis@us.redbull.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">RELIANCE SOLUTIONS, INC. - ATM--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">SAM MAKANI--}}
					{{--<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>RELIANCE SOLUTIONS, INC. - ATM</td>
				<td>SAM MAKANI
					<br>KEY ACCOUNT MANAGER
				</td>
				<td></td>
				<td>(210) 887-6769</td>
				<td>(210) 523-0280</td>
				<td>reliance4solutions.gmail.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">SAFE SYSTEMS - SURVILLANCE SYSTEMS & MONITORING SERVICES--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">--}}
					{{--LUIS CRISTOBALL--}}
					{{--<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>SAFE SYSTEMS - SURVILLANCE SYSTEMS & MONITORING SERVICES</td>
				<td>
					LUIS CRISTOBALL
					<br>KEY ACCOUNT MANAGER
				</td>
				<td>(210) 651-0093</td>
				<td>(210) 269-3975</td>
				<td>(210) 651-0093</td>
				<td>luis@ssysss.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">STAR WHOLESALE – C-STORE ITEMS--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">FARID KHAN--}}
					{{--<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>STAR WHOLESALE – C-STORE ITEMS</td>
				<td>FARID KHAN
					<br>KEY ACCOUNT MANAGER
				</td>
				<td>(210) 308-9990</td>
				<td>(512) 627-9801</td>
				<td>(210) 308-9992</td>
				<td>farid.khan121@yahoo.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">SWISHER – CLEANING SERVICES--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">DAN KARLEBCH--}}
					{{--<br>KEY ACCOUNT MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>SWISHER – CLEANING SERVICES</td>
				<td>>DAN KARLEBCH
					<br>KEY ACCOUNT MANAGER</td>
				<td>(210) 733-1122</td>
				<td>(210) 843-2356</td>
				<td>(210) 733-1166</td>
				<td>dan@alamoswisher.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">TOMS/LANCE--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">--}}
					{{--ALLAN PUNDT--}}
					{{--<br>DISTRIBUTOR--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>TOMS/LANCE</td>
				<td>ALLAN PUNDT
					<br>DISTRIBUTOR
				</td>
				<td>(210) 227 1702</td>
				<td>(210) 218-2918</td>
				<td></td>
				<td>mapdew22@sbcglobal.net</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">YUMI ICE CREAM--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">ANTHONY GARCIA--}}
					{{--<br>SALES REPRESENTATIVE--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr >
				<td>YUMI ICE CREAM</td>
				<td>ANTHONY GARCIA
					<br>SALES REPRESENTATIVE
				</td>
				<td>(210) 227-4268</td>
				<td>(210) 843-1109</td>
				<td></td>
				<td>anthony@yumiicecream.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>

			{{--<tr >--}}
				{{--<td colspan="4">YUMI ICE CREAM--}}
				{{--</td>--}}
			{{--</tr>--}}
			{{--<tr >--}}
				{{--<td colspan="4">ERIKA O’GRADY--}}
					{{--<br>ZONAL MANAGER--}}
				{{--</td>--}}
			{{--</tr>--}}
			<tr >
				<th>Vendor Name</th>
				<th>Name</th>
				<th>OFFICE PHONE</th>
				<th>MOBILE</th>
				<th>FAX</th>
				<th>Email</th>
			</tr>
			<tr>
				<td>YUMI ICE CREAM</td>
				<td>ERIKA O’GRADY
					<br>ZONAL MANAGER
				</td>
				<td></td>
				<td>(512) 791-1965</td>
				<td></td>
				<td>erika@yumiicecream.com</td>
			</tr>
			<tr>
				<td colspan="6" class="success"></td>
			</tr>
		</table>
	</div>

@stop