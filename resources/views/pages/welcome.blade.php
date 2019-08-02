<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		
        <!-- Styles -->
        <style>
            html, body {
/*                 background-image: url("img/buffet_background.jpg"); */
                background:url("img/buffet_background.jpg");
                background-repeat: no-repeat; /* Do not repeat the image */
                background-size: cover; /* Resize the background image to cover the entire container */
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            // orange-circle-button

            .orange-circle-button {
            	box-shadow: 2px 4px 0 2px rgba(0,0,0,0.1);
            	border: .5em solid #E84D0E;
            	font-size: 2em;
            	line-height: 1.1em;
            	color: #ffffff;
            	background-color: rgb(232, 113, 15);
            	margin: auto;
            	border-radius: 50%;
            	height: 7em;
            	width: 7em;
            	position: relative;
            }
            .orange-circle-button:hover {
            	color:#ffffff;
                background-color: rgb(232, 113, 15);
            	text-decoration: none;
            	border-color: #ff7536;
            	
            }
                .orange-circle-button:visited {
                	color:#ffffff;
                    background-color: rgb(232, 113, 15);
                	text-decoration: none;
                	
                }
                .orange-circle-link-greater-than {
                    font-size: 1em;
                }

                /* Prevent scrollbars to appear when waves go out of bound */
                .sonar-wrapper {
                  position: relative;
                  z-index: 0;
                  overflow: hidden;
                  padding: 8rem 0;
                  height: 100%;
                }

                /* The circle */
                .sonar-emitter {
                  position: relative;
                  margin:auto;
                  width: 275px;
                  height: 275px;
                  border-radius: 9999px;
                  background-color: HSL(45,100%,50%);
                }

                /* the 'wave', same shape and size as its parent */
                .sonar-wave {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  border-radius: 9999px;
                  background-color: HSL(45,100%,50%);
                  opacity: 0;
                  z-index: -1;
                  pointer-events: none;
                }

                /*
                  Animate!
                  NOTE: add browser prefixes where needed.
                */
                .sonar-wave {
                  animation: sonarWave 2s linear infinite;
                }
                
                @keyframes sonarWave {
                  from {
                    opacity: 0.4;
                  }
                  to {
                    transform: scale(3);
                    opacity: 0;
                  }
                }
                
                .col-center-block {
                    float: none;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                
                .title{
                margin-top: 60px;
                }
                
                .btn-primary{
                    font-size: 30px;
                }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    NaughtyorNice
                </div>
@auth
                <div class="links">
<!--                     <a href="{{ route('dashboard', Auth::id()) }}">Dashboard</a> -->
                    
                    		<div class="row sonar-wrapper">
		<button type ="button" class="sonar-emitter text-center text-white mt-0 btn-lg orange-circle-button btn btn-primary " onclick="window.location.href='{{ route('dashboard', Auth::id()) }}'" > Naughty <br />or <br />Nice
		<div class="sonar-wave"></div>
		</button>
		
		
		</div>
                   
                </div>
                @else
                <div class="links">
                    <a>Welcome to Naughty or nice, Please login first</a>
                   
                </div>
                @endauth
            </div>
        </div>
    </body>
</html>
