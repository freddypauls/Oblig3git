@extends('layouts.app') <!-- Koblet til layouts.app og henter det som ligger der -->

@section('content') <!-- Legger denne koden inn i seksjonen content når layouts.app legges til -->
<div class="container content">
	<div class="panel-default">
		 <div class="panel-heading">

			<h3>{{ $c->category }}</h3> <!-- skriver ut categorien og dens description som har id'en som sendes via url'en -->
			{{ $c->description }}

		 </div>


	</div>
	<div class="flex-box">

		@foreach($listings as $listing) <!-- Går igjennom alle listings og skriver ut alle som hører til denne kategories -->

			@if($listing->category_id == $c->id)
				<div class="item-flex">
							 <div class="panel-heading">

								<h3><a class="title-box" href="../listings/{{ $listing->id }}">{{ $listing->title }}</a></h3>


							 </div>

							<div class="panel-body">

								{{ $listing->description }}

							</div>
					</div>

			@endif

		@endforeach

 </div>
</div>
@endsection