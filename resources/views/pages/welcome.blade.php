

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
			<link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
        
        .homepage_container{
                float:left;
                width:100%;

            
        }
        .homepage-left{
                background-repeat: no-repeat;
                background-size: cover;
/*                 background-position: center; */
                height:100%;      
         }
         .homepage-left h1{
            text-align: center;
            margin-bottom:10%;
            color:#000000;
            padding-top: 15%;
            font-size: 7.5em;
         }   
         
          .homepage-left p{
            text-align: center;
            margin-bottom:7%;
            color:#060606;
            font-size: 1.1em;
          }

          .homepage-btn .first{
            margin-right:7%;
          }
          
          .homepage_first_div_top{
            text-align: center;
          }
             
         .homepage_first_div_top{
            height:87vh;
         }      
       .homepage-right {
               background-image: url("img/bg_003.png");
               background-position: center;
               background-size: 100% 110%;
               background-repeat: no-repeat; /* Do not repeat the image */


            }
            
       
           
        </style>
    </head>
    <body>
            <!--  -->
            <div class="container-fluid homepage_container bg-white">
            <div class="row">
            <!-- the First fragment -->
            
           <div class="col homepage-left">
            <div class="homepage_first_div_top">   
              
            <h1>Naughty or Nice ?</h1>
            <p>Establish a daily benchamrk through statistics to keep track of your environmental performance.</p>
            @auth
            <a href="{{ route('dashboard', Auth::id()) }}" class="btn btn-success">How are your traveling</a>
            @else
            <div class="homepage-btn">
                <a href="{{ route('login') }}" class="btn btn-primary first">Get Started</a>
                <a href="{{ route('register') }}" class="btn btn-primary ">Activate Account</a>
            
            </div>
            @endauth
            </div> 
            
            <div class="footer">
            @include('layouts._footer')
            </div>
          </div>
              <!-- the second fragment -->
           		<div class="col homepage-right">
           		</div>
           	
       
       		 </div>

			</div>

<script src="{{ mix('js/app.js') }}"></script>
    </body>
