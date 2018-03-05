@extends('layouts.app') <!-- Sier at fila er en del av layouts.app -->

@section('content') <!-- og at den skal legges inn i content, (da også henter resten av layouts.app inn på denne url'en) -->

@if (Auth::User()->admin_id == 0) <!-- Sjekker om admin_id er lik 0, dette vil da si at om admin_id er lik null er brukeren ikke en admin og bare en vanlig bruker -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                
      					<hr>
                		Her kan du se dine listings: <br>
               		@foreach($listings as $listing) <!-- Henter og går igjennom alle listings, og sender en kode for hver listing -->
               		
               			@if(Auth::User()->id == $listing->user_id) <!-- Sjekker opp hver listing til logget bruker via user_id hos listing og id hos bruker, og kjører koden om det er samme bruker (som vil si at den kjører koden om listingen hører til brukeren) -->
               			
               				<h4>{{ $listing->title }}</h4> <!-- Skriver ut tittelen til listingen -->
               				
               				<br>
               				<div class="comments">
               					<ul class="list-group">
               					
											@foreach($listing->messages as $message) <!-- Går igjennom alle meldinger som er koblet til en listing, og kjører kode for hver -->

												@if($listing->id == $message->listing_id) <!-- Sjekker om en melding er koblet til denne listingen via id -->

													<li class="list-group-item">
												
														@foreach($users as $user) <!-- Går igjennom alle brukerene -->

															@if($user->id == $message->user_id) <!-- finner brukeren som hører til meldingen -->

																<h5>{{ $user->name }}</h5> <!-- skriver ut navnet til brukeren som da hører til denne meldingen -->

															@endif

														@endforeach

														{{ $message->body }} <!-- skriver ut det som står i meldingen -->

													</li>
												
												@endif

											@endforeach
										
										</ul>
               				</div>
               			
               			@endif
               		
               		@endforeach
               		
                </div>
            </div>
        </div>
    </div>
</div>
@elseif (Auth::User()->admin_id == 1) <!-- Om admin_id til en bruker er lik 1, som vil si at om brukeren er en admin så kjør dette -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as admin!
                    <br><hr>
                    Categories:
                    <table border="1px">
                    @foreach($categories as $c) <!-- Går igjennom om skriver ut alle kategorier som finnes -->
                    
                    	<tr>
								<td>
									{{ $c->category }}
								</td>
                    	</tr>
                    
                    @endforeach
   
                    </table>
                    <br>
                    <hr>
                		Her kan du se dine listings: <br>
               		@foreach($listings as $listing) <!-- Går igjennom alle listings og skriver ut alle listings som finnes, om det er meldinger koblet til en listing så skrives de ut sammen med navnet til personen som sker meldingen -->
               		
               			@if(Auth::User()->id == $listing->user_id)
               			
               				<h4>{{ $listing->title }}</h4>
               				
               				<br>
               				<div class="comments">
               					<ul class="list-group">
               					
											@foreach($listing->messages as $message)

												@if($listing->id == $message->listing_id)

													<li class="list-group-item">
												
														@foreach($users as $user)

															@if($user->id == $message->user_id)

																<h5>{{ $user->name }}</h5> 

															@endif

														@endforeach

														{{ $message->body }}

													</li>
												
												@endif

											@endforeach
										
										</ul>
               				</div>
               			
               			@endif
               		
               		@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
