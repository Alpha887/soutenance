<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description"
            content="investment solution">
	<title>Vérification de Mail | {{ env('APP_NAME') }}</title>

	@include('generals.css')
	
	@yield('stylesheets')

	@livewireStyles

</head>
<body>

	<header id="topnav" class="sticky defaultscroll">
	    <div class="container">
	        <!-- Logo container-->
	        <div>
	            <a class="logo" href="{{route('welcome')}}">
	                <strong>InvestmentApp</strong>
	                <img src="storage/app/public/photos/91rKAM1SMeq3B99gSsaq5xJiVhMi8arrHax6VksL.png" height="35" alt="" class="mr-2">
	            </a>
	        </div>
	        
	    </div>
	    <!--end container-->
	</header>


	<section class=" auth">
	    <div class="container">
	        <div class="pb-3 row justify-content-center">

	            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">

	                <div class="text-center">
	                   <a href="#"><img src="storage/app/public/photos/91rKAM1SMeq3B99gSsaq5xJiVhMi8arrHax6VksL.png" alt="" class="mb-3 img-fluid auth__logo"></a> 
	                </div>
	                
	                <div class="bg-white shadow card login-page roundedd border-1 ">
	                    <div class="card-body">
	                        <h4 class="text-center card-title">Vérification d'email</h4>
	                         @livewire('email-verification')
	                    </div>
	                </div>
	                <!---->
	            </div>
	            <!--end col-->
	        </div>
	        <!--end row-->
	    </div>
	    <!--end container-->
	</section>
	<div>
        
        

	</div>

	

	
	@yield('javascripts')
	@include('generals.js')
	@livewireScripts
		
</body>
</html>