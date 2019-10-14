<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
			<link href="{{ mix('css/app.css') }}" rel="stylesheet">
			
			
			<style> 


                </style>
    </head>
    <body>
            <!--  -->
            <div class="container-fluid homepage_container bg-white">
			<div class = "row">
                <!-- the First fragment -->
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 homepage-left">
                            <div class="homepage_first_div_top">   
                                <h1 class ="display-1">Naughty or Nice ?</h1>
                                <p>Establish a daily benchmark through statistics to keep track of your environmental performance.</p>
                                @auth
                                <a href="{{ route('dashboard', Auth::id()) }}" class="btn btn-success">My Performance</a>
                                @else
                                <div class="homepage-btn">
                                    <a href="{{ route('login') }}" class="btn btn-primary first">Get Started</a>
                                    <a href="{{ route('register') }}" class="btn btn-primary ">Activate Account</a>
                                    <a href="{{ route('dashboard', Auth::loginUsingId(7)) }}" class="btn btn-dark">Visitor Model</a>
                                </div>
                                @endauth
                            </div>  
                            <div class="footer">
                            @include('layouts._footer')
                            </div>
                      </div>
                      
                      
                  <!-- the second fragment -->
               		<div class="col-lg-6 col-md-6 hidden-sm hidden-xs homepage-right">
               		</div>
               		</div>
			</div>
		<script src="{{ mix('js/app.js') }}"></script>
    </body>
