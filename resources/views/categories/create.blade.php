@extends('layouts.app') <!-- Henter inn layout.app -->

@section('content') <!-- Sier at koden skal inn i seksjonen content i layout.app (på denne siden) -->

	@if(Auth::Check() == true) <!-- Sjekker at den bruker e logget inn (trenger egentlig ikke == true) -->

		@if(Auth::User()->admin_id == 1) <!-- Sjekker at en bruker er admin -->

			<div class="container">

				 <div class="row">

					  <div class="col-md-8 col-md-offset-2">

							<div class="panel panel-default">

								 <div class="panel-heading">Create Category</div>

								 <div class="panel-body">

									<div class="card">

										<div class="card-block">

											<form method="POST" action="/categories">

												{{ csrf_field() }} <!-- Token kode sånn at man ikke kan sende info og bare endre hvilken bruker id den sender -->
												
												<div class="form-group">

													<input type="text" class="form-control" name="category" placeholder="Category">

												</div>

												<div class="form-group">

													<input id="description" name="description" class="form-control" placeholder="Enter description here...">

												</div>

												<div class="form-group">

													<input class="button-btn" type="submit" value="Make Category">

												</div>

											</form>

										</div>

									</div>

									 @include('layouts.errors') <!-- Inkluderer layouts.errors i filen, som kjører ut om det er noen errorer i formen -->

								 </div>

							</div>

					  </div>

				 </div>

			</div>

		@elseif(Auth::User()->admin_id == 0) <!-- Sjekker om en bruker ikke er admin og sier at man må være admin for å komme inn -->

			<div class="container">

				<div>

					Du må være admin for å kunne gjøre dette

				</div>

			</div>

		@endif

	@endif

@endsection