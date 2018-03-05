@extends('layouts.app') <!-- En del av layouts.app som inneholder header(navbar) -->

<!-- legges i del content på layouts.app -->
@section('content')
@if (Auth::Check() == true)	<!-- Sjekker om en bruker er loget inn -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Make a new listing</div>

                <div class="panel-body">
                  
						<form method="POST" action="/listings">
						
							{{ csrf_field() }} <!-- Sjekker opp til token, at det er en bruker som er logget inn som sender inn skjema og ikke noen som prøver å legge inn infromasjon til en annen bruker via siden -->
							
							<div class="form-group">
							
								<input type="text" class="form-control" name="title" placeholder="Title">
								
							</div>
							
							<div class="form-group">
							
								<textarea type="text" id="description" name="description" class="form-control" placeholder="Enter description her..."> </textarea>
								
							</div>
							
							<div class="form-group">
							
								<select class="button-btn" id="category" name="category">
								
									<option name="">Select Category</option>
									
									 @foreach ($categories as $c) <!-- Går igjennom alle categories og kjører denne koden for hver enkelt kategori -->
                    
                    					<option value="{{ $c->id }}">{{ $c->category }}</option> <!-- Skriver ut alle kategoriene som valg i formen -->

									  @endforeach
									  
								</select>
								
							</div>
							
							<br>
							
							<div class="form-group">
							
								<input class="button-btn" type="submit" value="Make Listing">
								
							</div>
							
						 </form>
              	
               	<div>
               	
               		@include('layouts.errors') <!-- Inkluderer filen layouts.error som desplayer en errormelding om det er noe feil med formen du sender inn -->
               		
               	</div>
               	
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

@else <!-- Om brukeren ikke er logget inn, si at man må være logget inn for å se dette -->

<div class="container">
	
	<h1>Du må være logget inn for å bruke denne funskjonen</h1>
	
</div>

@endif

@endsection