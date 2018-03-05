@if(count($errors)) <!-- Om det er sendt noen errormeldinger hit så kjør dem -->
                   
 <div class="alert alert-danger">

	<ul>
		@foreach ($errors->all() as $error) <!-- Gå gjennom alle errorer som er send og kjør ut meldingen -->

			<li> {{ $error }} </li>

		@endforeach

	</ul>

 </div>

@endif