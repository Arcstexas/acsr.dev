<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Association of Convenience Store Retailers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!--<script type="text/javascript" src="js/jquery-ui.min.js"></script>-->    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/responsee.css">
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->  
    <link rel="stylesheet" href="/css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/responsee.js"></script>   
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
		@yield('top-script')
	</head>
	<body>


		<main id="main" class="container-fluid">

			@include('/partials/navBar')



			@yield('content')  {{-- is a placeholder --}}

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="myModalLabel"><center><b>Login</b></center></h3>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('post:login')}}" method="post">
                                @if(Session::has('fail'))
                                    <p class="alert alert-danger">{{Session::get('fail')}}</p>
                                @endif
                                @if ($errors->has())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="myModalLabel"><center><b>Change your Password</b></center></h3>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('post:change:password')}}" method="post">
                                @if(Session::has('fail'))
                                    <p class="alert alert-danger">{{Session::get('fail')}}</p>
                                @endif
                                @if ($errors->has())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			@include('/partials/footer');
		</main>
      <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {
         @if(Session::has('fail'))
            $('#myModal').modal('show');
         @endif
         @if (count($errors) > 0)
            @if(Session::has('password'))
                $('#changePassword').modal('show');
            @else
                $('#myModal').modal('show');
            @endif
         @endif
           $("#owl-demo").owlCarousel({
            slideSpeed : 400,
            autoPlay : true,
            navigation : false,
            pagination : false,
            singleItem:true
           });
           $("#owl-demo2").owlCarousel({
            slideSpeed : 400,
            autoPlay : true,
            navigation : false,
            pagination : true,
            singleItem:true
           });
         });    
          
      </script> 
	@yield('bottom-script')

	</body>
</html>