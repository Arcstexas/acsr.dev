<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Association of Convenience Store Retailers</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- normalizar -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--fontawesome-->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!--animation-->
    <link href="/css/animate.min.css" rel="stylesheet">

    <!--main css-->
    <link href="/css/style.css" rel="stylesheet">

    <!--main css-->
    <link href="/css/responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		@yield('top-script')
	</head>
	<body>


		<main id="main" class="container">

			@include('/partials/navBar')



			@yield('content')  {{-- is a placeholder --}}


			@include('/partials/footer');
		</main>
    <!-- main jQuery-->
    <script src="/js/jquery-1.11.3.min.js"></script>

    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- main js -->
    <script src="/js/main.js"></script>
	@yield('bottom-script')
	<footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="company_logo wow slideInDown">
                        <h2>companyname</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>New York</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>london</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>madrid</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>