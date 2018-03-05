<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shit4Free</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			 
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            @if (Route::has('login'))
               
                <div class="top-right links">
                   
                    @if (Auth::check()) <!-- Sjekker om en bruker er logget inn -->
                       
                        <a href="{{ url('/home') }}">Dashboard</a>
                        
                    @else <!-- Om ikke logget inn send dette -->
                       
                        <a href="{{ url('/login') }}">Login</a>
                        
                        <a href="{{ url('/register') }}">Register</a>
                        
                    @endif <!-- Slutter if setningen -->
                    
                </div>
                
            @endif

            <div class="content fix-he-wi">
               
                <div class="title m-b-md">
                  	
                   	Shit4Free
                   	
                </div>

                <div class="links">
                   
                    @foreach ($categories as $c) <!-- Ser igjennom alle kategorier og kjører en kode for hver av dem -->
                    
                    	<a href="categories/{{ $c->id }}">{{ $c->category }}</a> <!-- Skriver ut alle kategorier som linker som linker til categories/(dems id) -->
                    	
                    @endforeach
                </div>
                <hr>
						 <div class="flex-box">
							 <?php $i = 0; ?> <!-- Bare en variabel for å sjekke for mange ganger foreachen har gått, prøvde count() osv men funka ikke så bare lagde en ghetto løsning -->
							 @foreach($listings as $listing)<!-- For hver listing kjør denne koden -->

								@if(6 > $i) <!-- Så lenge foreachen har gått mindre enn 7 ganger (kjører max 6 ganger) kjør denne koden -->
									<div class="item-flex">
										<div class="panel panel-default" border="1px">
												 <div class="panel-heading">
													
													<h3><a class="title-box" href="listings/{{ $listing->id }}">{{ $listing->title }}</a></h3> <!-- Henter tittelen til en listing og kjører den ut som en link til en side som kjører tittelen med den idne (henter og sender id via url) -->


												 </div>

												<div class="panel-body">

													{{ $listing->description }} <!-- skriver ut description -->

												</div>
										</div>
									</div>
								@endif
								<?php $i++; ?> <!-- variabelen i +1, dette gjør at for hver listing som blir skrevet ut så teller variabelen i de, sånn at vi kan stoppe den etter den har gått 6 ganger -->
							 @endforeach
						 </div>
            </div>
        </div>
    </body>
</html>
